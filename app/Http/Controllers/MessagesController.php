<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Message;


use App\Http\Controllers\Controller;

use App\Http\Requests\MessageRequest;
use Carbon\Carbon;
use Auth;

class MessagesController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth', ['only' => 'create']);
    }

    public function index()
    {
        $user = Auth::user();
        $messages = Message::latest('published_at')->published()->get(); // сортировка
        return view('messages.index')->with(['messages'=> $messages, 'user' => $user]);
    }

    public function show(Message $message)
    {
        $name = Auth::user()->name;
        return view('messages.show')->with('message', $message)->with('name', $name);
    }

    public function create()
    {
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view('messages.create')->with(['name' => $name, 'email' => $email]);
    }

    public function store(MessageRequest $request)
    {
        $message = new Message($request->all());
        Auth::user()->messages()->save($message);

        if ($request->hasFile('image')) {
            $name = Auth::user()->name;
            $image = $request->file('image');
            $imageName = $name . '.' . $image->getClientOriginalExtension();
            $imageName = explode('.', $imageName);
            $request->file('image')->move(base_path() . '/public/images/', $imageName[0] . '.jpg');

        }
        return redirect('messages');
    }

    public function edit(Message $message)
    {
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('messages.edit', compact('message', 'name', 'email'));
    }

    public function update(Message $message, MessageRequest $request)
    {

        $message->update($request->all());

        return redirect('messages');

    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect('messages');
    }
}
