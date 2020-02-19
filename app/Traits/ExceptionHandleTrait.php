<?php
namespace App\Traits;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;
use Telegram\Bot\Laravel\Facades\Telegram;

trait ExceptionHandleTrait
{
    protected function sendExceptionToTelegram($exception)
    {
        try {
            // If have more case should use switch case
            if ($exception instanceof ValidationException || $exception instanceof AuthenticationException) {
                return false;
            }
            $message = $this->getTemplateMessageTelegram($exception);
            Telegram::sendMessage([
                'chat_id' => env('TELEGRAM_CHANNEL_ID', '-1001397623767'),
                'parse_mode' => 'HTML',
                'text' => $message
            ]);

        } catch (Exception $ex) {
            throw new $ex->getMessage();
        }
    }

    /**
     * Get Template Message Exception
     *
     * @param Exception $exception
     * @return string
     */
    protected function getTemplateMessageTelegram($exception)
    {
        return  env('APP_NAME') .' has an error with message: '
            . '<strong>' . $exception->getMessage() . "</strong>\n"
            . 'on file: '.'<strong>' . $exception->getFile() . "</strong>\n"
            . 'at line: '.'<strong>' . $exception->getLine() . "</strong>\n"
            . 'at:  ' . Carbon::now()->format('d-m-Y H:i:s') . ' on ' . env('APP_ENV') . ' enviroment';
    }
    
}
