<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureWalletReadyForWithdrawal
{
    public function handle(Request $request, Closure $next): Response
    {
        $wallet = $request->user()?->wallet;

        if (!$wallet || !$wallet->isConnected()) {
            return redirect()
                ->route('connect.wallet')
                ->with('error', 'Connect your wallet before requesting a withdrawal.');
        }

        if (!$wallet->hasWithdrawalWallet()) {
            return redirect()
                ->route('withdrawal.wallet')
                ->with('error', 'Add a withdrawal wallet address before requesting a withdrawal.');
        }

        return $next($request);
    }
}
