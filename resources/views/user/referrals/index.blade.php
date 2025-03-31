@extends('layouts.user')

@section('contents')
    <h3>Your Referrals:</h3>
<br>
<br>
<table width="300" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td class="item">Referrals:</td>
      <td class="item">{{ user()->referredUsers->count() }}</td>
    </tr>
    <tr>
      <td class="item">Active referrals:</td>
      <td class="item">{{ user()->referredUsers->count() }}</td>
    </tr>
    <tr>
      <td class="item">Total referral commission:</td>
      <td class="item">${{ number_format($referralsx) }}</td>
    </tr>
  </tbody>
</table>
@endsection
