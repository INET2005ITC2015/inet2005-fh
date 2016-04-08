<!-- Title form input -->

<div class="form-group">

    {!! Form::label('title', 'Title:') !!}

    {!! Form::text('title', null, ['class' => 'form-control']) !!}

</div>

<!-- Body form input -->
<div class="form-group">

    {!! Form::label('body', 'Body:') !!}

    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

</div>

<!-- Published_at form input -->
<div class="form-group">

    {!! Form::label('published_at', 'Published On:') !!}

    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

</div>

<!--form input -->
<div class="form-group"
        {!! Form::label('tag_list', 'Tags:') !!}
        {!! Form::select('tag_list[]', $tags, null, ['id'=>'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>

<!-- Add Article form input -->
<div class="form-group">

    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

</div>

@section ('footer')
    <script>
        $('#tag_list').select2({
            placeholder: 'Choose A Tag!',
            tags: true

        });

    </script>
    @endsection