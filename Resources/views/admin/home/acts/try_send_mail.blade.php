@extends('adm_theme::layouts.app')
@section('content')
    <x-col size="12">
            <form action="{!! Request::fullUrlWithQuery([]) !!}" method="POST">
                @csrf
<<<<<<< HEAD

                <x-input.group type="text" name="subject" value="mail test" />

                <x-input.group type="text" name="from" value="staff@example.com" />

                <x-input.group type="text" name="to" value="marco.sottana@gmail.com" />

                <x-input.group type="text" name="body" value="invio mail di test" />
                {{--
                <x-input.group type="select" name="engine" :options="$options"/>
                --}}
                <x-input.group type="select" name="template" :options="$template_options"/>

                <x-input.group type="select" name="mailer" :options="$mailer_options"/>
=======
                
                <x-input.group type="text" name="subject" value="mail test" />

                <x-input.group type="text" name="from" value="staff@example.com" />
                
<<<<<<< HEAD
                <x-input.group type="text" name="to" />

                <x-input.group type="wysiwyg" name="body" />
>>>>>>> e3e9786 (.)
=======
                <x-input.group type="text" name="to" value="marco.sottana@gmail.com" />
>>>>>>> 7616aad (up)

                <x-input.group type="text" name="body" value="invio mail di test" />
                {{--
                <x-input.group type="select" name="engine" :options="$options"/>
                --}}
                <x-input.group type="select" name="template" :options="$template_options"/>

                <x-input.group type="select" name="mailer" :options="$mailer_options"/>

                <button class="btn btn-primary" type="submit">go!</button>

            </form>
    </x-col>
@endsection