Bấm đây để reset mật khẩu: <a href="{{ $link = backpack_url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
