@extends('layouts.manage')

@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">Create New User</h1>
			</div>
		</div>
		<hr class="m-t-0">
		<div class="columns">
			<div class="column">
				<form action="{{route('users.store')}}" method="POST">
					{{csrf_field()}}
					<div class="field">
						<label for="name" class="lebel">Name</label>
						<p class="control">
							<input class="input" type="text" name="name" id="name">
						</p>
					</div>

					<div class="field">
						<label for="email" class="lebel">Email:</label>
						<p class="control">
							<input class="input" type="text" name="email" id="email">
						</p>
					</div>

					<div class="field">
						<label for="password" class="lebel">Password</label>
						<p class="control">
							<input class="input" type="text" name="password" id="password" v-if="!auto_password">
							<b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Auto Generate Password</b-checkbox>
						</p>
					</div>
					<button class="button is-success">Create User</button>
					</form>
		</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>
		var app= new Vue({
			el:'#app',
			data:{
				auto_password:true
			}
		});
	</script>
@endsection