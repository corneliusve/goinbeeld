@extends('tools.layouts.default')

@section('content')

	<div class="loginwrapper" style="background-image: url({{ asset('images/golf.svg') }});">
		<div class="container has-items-centered">
			<div class="formWrapper">
				<h1 class="is-size-3">Aanmelden</h1>
				<form action="{{ route('register') }}" method="POST">

					{{ csrf_field() }}

					<div class="field">
						<div class="control">
							<input name="name" type="text" class="input {{ $errors->has('name') ? ' is-danger' : '' }}" placeholder="name" required>
						</div>

						@if ($errors->has('name'))
							<p class="help is-danger">{{ $errors->first('email') }}</p>
						@endif
					</div>

					<div class="field">
						<div class="control">
							<input name="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" placeholder="E-mail" required>
						</div>

						@if ($errors->has('email'))
							<p class="help is-danger">{{ $errors->first('email') }}</p>
						@endif
					</div>

					<div class="field">
						<div class="control">
							<input name="password" type="password" class="input {{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Wachtwoord" required>
						</div>

						@if ($errors->has('password'))
							<p class="help is-danger">{{ $errors->first('password') }}</p>
						@endif
					</div>

					<div class="field">
						<div class="control">
							<input name="password_confirmation" type="password" class="input {{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Wachtwoord Herhalen" required>
						</div>
					</div>

					<div class="field m-t-50">
						<div class="columns">
							<div class="column">
								<input class="m-t-20" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="secondary-text-color">Onthoud mij</span>
							</div>
							<div class="column">
								<div class="has-items-right">
									<button class="button" type="submit">Log in</button>
								</div>
							</div>
						</div>
					</div>

				</form>
			</div>

			<p class="m-t-50 has-text-white">Heb je al een account <a href="{{ route('login') }}" class="has-text-white"><strong>Log je hier in</strong></a></p>
		</div>
	</div>

@endsection
