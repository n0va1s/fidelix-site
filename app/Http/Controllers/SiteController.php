<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\WhatsappLink;
use App\Model\Lead;
use App\Model\Message;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function client()
    {
        return view('site.client');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function product()
    {
        return view('site.product');
    }

    public function lead(Request $req)
    {
        $data = $req->validate(
            [
                'name' => 'required|max:100',
                'email' => 'required|email',
            ]
        );

        if (empty($data)) {
            return back()->withInput();
        }

        Lead::create($data);
        toastr('Obrigado! Entraremos em contato', 'success');
        return redirect()->route('site.home');
    }

    public function message(Request $req)
    {
        $data = $req->validate(
            [
                'name' => 'required|max:100',
                'email' => 'required|email',
                'subject' => 'required|max:200',
                'message' => 'required',
            ]
        );
        
        if (empty($data)) {
            return back()->withInput();
        }

        Message::create($data);
        toastr('Obrigado! Entraremos em contato', 'success');
        return redirect()->route('site.contact');
    }

    public function zapzap(Request $req)
    {
        $data = $req->validate(
            [
                'name'      => 'required|max:100',
                'email'     => 'required|email',
                'phone'     => 'required|min:11',
                'greeting'  => 'nullable',
            ]
        );
        
        if (empty($data)) {
            toastr('Ops! Não foi possível gerar seu Whatsapp Link', 'error');
            return back()->withInput();
        }

        $phone = str_replace(
            '+',
            '',
            str_replace(
                '-',
                '',
                str_replace(
                    '(',
                    '',
                    str_replace(
                        ')',
                        '',
                        str_replace(
                            '.',
                            '',
                            str_replace(
                                ' ',
                                '',
                                $data['phone']
                            )
                        )
                    )
                )
            )
        );
        $greeting = str_replace(' ', '%20', $data['greeting']);
        $url = "https://wa.me/55$phone?$greeting";
        Lead::create($data);
        Mail::to($data['email'])->send(
            new WhatsappLink($url)
        );
        toastr('O seu WhatsApp link foi enviado para o seu email', 'success');
        return redirect()->route('site.product');
    }
}
