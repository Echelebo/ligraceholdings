<x-mail::message>
# Trading Plan Activation Successful

Hi {{ $activation->user->username  }},

You have successfully activated {{ $activation->bot->name }} trading portfolio.

Thanks,<br>
{{ site('name') }}
</x-mail::message>
