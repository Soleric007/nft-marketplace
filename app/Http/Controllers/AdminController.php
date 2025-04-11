<?php

namespace App\Http\Controllers;

use App\Models\NFT;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Deposit;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Write code on Method
     *
    //  * @return response()
     */
    public function dashboard()
    {
        $user = Auth::user();
        $totalUsers = User::count();
        $totalNFTs = NFT::count();
        $totalWallets = Wallet::count();
        $totalDeposits = Deposit::sum('amount'); // Total amount deposited
        $totalWithdrawals = Withdrawal::sum('amount'); // Total amount withdrawn
        $pendingWithdrawals = Withdrawal::where('status', 'pending')->count();
        $recentNFTs = NFT::latest()->take(5)->get(); // Get the 5 latest NFTs
        return view('admin.pages.dashboard', compact(
            'user',
            'totalUsers',
            'totalNFTs',
            'totalWallets',
            'totalDeposits',
            'totalWithdrawals',
            'pendingWithdrawals',
            'recentNFTs'
        ));
    }
    public function nfts()
    {
        // Retrieve all NFTs along with user details
        $nfts = NFT::with('user')->latest()->paginate(10);
        return view('admin.pages.nfts', compact('nfts'));
    }
    public function wallets()
    {
        $wallets = Wallet::with('user')->latest()->paginate(10);
        return view('admin.pages.wallets', compact('wallets'));
    }
    public function deposits()
    {
        $deposits = Deposit::with('user')->latest()->paginate(10);
        return view('admin.pages.deposits', compact('deposits'));
    }
    public function withdrawals()
    {
        $withdrawals = Withdrawal::with('user')->latest()->paginate(10);
        return view('admin.pages.withdrawals', compact('withdrawals'));
    }
    public function confirmWithdrawal(Withdrawal $withdrawal)
    {
        // Update the withdrawal status to confirmed
        $withdrawal->update(['status' => 'confirmed']);

        // Send an email to the user
        Mail::to($withdrawal->user->email)->send(new \App\Mail\WithdrawalConfirmed($withdrawal));

        return redirect()->back()->with('success', 'Withdrawal confirmed and email sent to the user.');
    }
    public function users()
    {
        $users = User::all();
        return view('admin.pages.users', compact('users'));
    }
    public function showEditUser($user)
    {
        $user = User::find($user);

        return view('admin.pages.editUser', compact('user'));
    }
    public function updateUser(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        // Find the user
        $user = User::findOrFail($id);

        // Update user data
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User information updated successfully!');
    }
    public function deleteUser($user)
    {
        $user = User::find($user);
        $user->delete();
        return redirect()->route('admin.users')->with('message', 'User Removed Successfully');
    }

}
