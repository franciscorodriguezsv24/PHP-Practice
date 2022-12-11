<?php include '../templates/Header.php' ?>

<?php include '../templates/navbar.php' ?>

<div class="container">
<table class="table">
  <thead>
    <tr>
        <th scope="col">Id</th>
      <th scope="col">Book name</th>
      <th scope="col">Category</th>
      <th scope="col">Review</th>
      <th scope="col">Author</th>
      <th scope="col">Donater</th>
      <th scope="col">File</th>
      <th scope="col">actions</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>SOLID</td>
      <td>software architecture</td>
      <td>You will learn about 5 principles that could help you to improve your web architecture</td>
      <td>James Gunn</td>
      <td>50</td>
      <td> 
      <a href="../templates/resources/SOLID.docx">
      <span class="material-symbols-outlined">download</span>
      </td></a>
      <td><a href=" " class="btn btn-white text-warning ml-2 mr-2">Edit</a></td>
      <td><a href=" " class="btn btn-white text-danger ml-2 mr-2">Delete</a></td>


    </tr>
  </tbody>
</table>
</div>

<?php include '../templates/footer.php' ?>

