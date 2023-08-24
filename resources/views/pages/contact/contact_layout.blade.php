@extends('layout')
@section('content')

<div class="span9">
	<div class="well">
	<h1>Liên hệ</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span9 relative">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9162474968493!2d106.63534721465312!3d10.817721261388552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a00e7573c9%3A0x81f186da49c702c6!2zTuG7mWkgVGjhuqV0IEjDuW5nIMSQ4bupYw!5e0!3m2!1svi!2s!4v1673111060618!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

		<div class="absoluteBlk">
		
		</div>
		</div>
		
		
		<div class="span11">
			<div class="well">
			<h5>Đăng Nhập Liên Hệ</h5>

			<form action="{{URL::to('/show-cart')}}" method="get">
			{{csrf_field()}}
			  <div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				  <input class="span30"  type="text" placeholder="Email" name="email_account">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				  <input type="password" class="span30" placeholder="Password" name="password_account">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
                    <label class="checkbox">
					    <input type="checkbox"> Nhớ đến tôi
					</label>
            
				  <button type="submit" class="defaultBtn">Đăng Nhập</button> <a href="#">Nhớ Tài Khoản</a>
				</div>
			  </div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
</div>
@endsection