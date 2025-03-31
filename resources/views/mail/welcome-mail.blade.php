<x-mail::message>
# Welcome to {{ site('name') }}

Hi {{ $user->name }},

Your account with email {{ $user->email }} has been created successfully.

Username: {{$user->username}} <br>
Password: {{$pass}}

By signing up for {{ site('name') }}, you're well on your way to effortless trading and amplifying returns.

<br>

<hr />


<p align="center"><font size="2">If you have any questions, please email us at {{ site('email') }} or chat with a real live human. They can answer questions about your account or help you with your trading steps.</font></p>



Thanks,<br>
{{ site('name') }}
</x-mail::message>
