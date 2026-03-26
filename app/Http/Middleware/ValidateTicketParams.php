<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateTicketParams
{
    /**
     * List of allowed statuses and priorities
     */
    private $allowedStatuses = ['open', 'in_progress', 'closed'];
    private $allowedPriorities = ['low', 'medium', 'high'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $status = $request->route('status');
        $priority = $request->query('priority');

        $errors = [];

        // Validate status
        if ($status && !in_array($status, $this->allowedStatuses)) {
            $errors[] = "Invalid status: $status";
        }

        // Validate priority
        if ($priority && !in_array($priority, $this->allowedPriorities)) {
            $errors[] = "Invalid priority: $priority";
        }

        if (!empty($errors)) {
            return response()->view('tickets.error', ['errors' => $errors]);
        }

        return $next($request);
    }
}
