<section>
    <h1>Comments</h1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Body</th>
        </tr>
      </thead>
      <tbody>
      	@foreach ($comments as $comment)
            <tr>
              <th scope="row">{{ $comment->id }}</th>
              <td>{{ $comment->body }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
    {{ $comments->links() }}
</section>
