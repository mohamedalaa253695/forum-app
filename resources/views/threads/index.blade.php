@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Forum Threads</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
                <div class="panel-body p">
                
                     @foreach($threads as $thread)
                     <div class="container">      
                          <article>   
                            <h4 >
                                <a href="/threads/{{$thread->id}}">

                                     {{$thread['title']}}
                                </a>
                            </h4>

                            <div class="body">{{$thread->body}}</div>
                        </article>
                        <hr>
                     </div>
                       
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
