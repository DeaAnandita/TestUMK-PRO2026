<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->status;

        $borrowings = Borrowing::with(['room','user'])
            ->when($status,function($query) use($status){

                $query->where('status',$status);

            })
            ->latest()
            ->paginate(10);

        return view(
            'approvals.index',
            compact('borrowings','status')
        );
    }

    public function approve(Borrowing $borrowing)
    {
        $conflict = Borrowing::where('room_id',$borrowing->room_id)

            ->where('tanggal',$borrowing->tanggal)

            ->where('status','Disetujui')

            ->where('id','!=',$borrowing->id)

            ->where(function($query) use($borrowing){

                $query

                ->where('jam_mulai','<',$borrowing->jam_selesai)

                ->where('jam_selesai','>',$borrowing->jam_mulai);

            })

            ->exists();

        if($conflict){

            return back()->with(
                'error',
                'Ruangan sudah dipakai pada jam tersebut.'
            );

        }

        $borrowing->update([

            'status'=>'Disetujui',

            'approved_by'=>auth()->id(),

            'approved_at'=>now(),

        ]);

        return back()->with(
            'success',
            'Pengajuan berhasil disetujui.'
        );
    }

    public function reject(Borrowing $borrowing)
    {

        $borrowing->update([

            'status'=>'Ditolak',

            'approved_by'=>auth()->id(),

            'approved_at'=>now(),

        ]);

        return back()
            ->with('success','Pengajuan ditolak.');

    }
}