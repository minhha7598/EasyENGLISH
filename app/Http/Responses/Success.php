<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;

class Success implements Responsable
{
    /**
     * @param  string  $message
     * @param  array  $data
     * @param  int  $code
     */
    public function __construct(
        private mixed $message,
        private array $data,
        private int $code,
    ) {}

    /**
     * @param  $request
     * @return \Symfony\Component\HttpFoundation\Response|void
     */
    public function toResponse($request)
    {
        return response()->json(
            [
                'message' => $this->message,
                'data' => $this->data,
                'status' => $this->code,
            ]
        );
    }
}
