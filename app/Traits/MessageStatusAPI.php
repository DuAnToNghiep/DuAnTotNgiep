<?php

namespace App\Traits;

trait MessageStatusAPI
{
    /**
     * Message Show
     * 
     * @return string
     */

    public static function list($data = null, $statusCode = 200)
    {
        return response()->json(
            [
                'statusCode' => $statusCode,
                'data' => $data,
                'message' => "Successfully"
            ]
        );
    }

    public static function show($data = null, $message = 'Retrieved successfully', $statusCode = 200)
    {
        return response()->json([
            'statusCode' => $statusCode,
            'data' => $data,
            'message' => $data == null ? 'Data not found' : $message,
        ], $data == null ? 404 : $statusCode);
    }

    /**
     * Message Store
     * 
     * @return string
     */
    public static function store()
    {
        return response()->json([
            'statusCode' => 201,
            'message' => 'Created successfully'
        ], 201);
    }

    /**
     * Message Update
     * 
     * @return string
     */
    public static function update()
    {
        return response([
            'statusCode' => 200,
            'message' => 'Updated successfully'
        ], 200);
    }

    /**
     * Message Destroy
     *
     * @return \Illuminate\Http\Response
     **/
    public static function destroy()
    {
        return response()->json([
            'statusCode' => 200,
            'message' => 'Deleted successfully'
        ], 200);
    }

    /**
     * Display a error when input is invalid.
     *
     * @param Illuminate\Support\Facades\Validator $validator
     * @return \Illuminate\Http\Response
     */
    public static function displayInvalidInput($validator)
    {
        return response()->json(
            [
                'statusCode' => 400,
                'error' => $validator->errors(),
                'message' => 'Invalid input'
            ],
            400
        );
    }

    /**
     * Not found
     *
     * @return \Illuminate\Http\Response
     */
    public static function notFound()
    {
        return response()->json([
            'statusCode' => 400,
            'message' => 'Not found'
        ], 404);
    }
}
