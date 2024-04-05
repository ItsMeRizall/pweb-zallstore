<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper-all">
      <div class="sidebar">
        <div class="top">
          <div class="title">
            <img src="./assets/img/logo-movil.png" alt="logo" />
            <h2>Zall Store</h2>
          </div>
          <ul>
            <li class="active">
              <a href="index.php"
                ><img src="./assets/img/ico1.png" /><span>Dashboard</span>
              </a>
            </li>

            <li>
              <a href="index.php"
                ><img src="./assets/img/ico3.png" /><span>Product</span></a
              >
            </li>
            <li>
              <a href="index.php"
                ><img src="./assets/img/ico7.png" /><span>Add Product</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="account">
            <div class="profile">
                <img src="./assets/img/profile.jpg" alt="image">
                <div class="name">
                    <h4>Rizal</h4>
                    <p>Admin</p>
                </div>
            </div>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
              </svg></span>
        </div>
      </div>

      <div class="main-content">
        <h2>Halo.. [] 👋🏼</h2>
        <div class="box">
          <h3>Daftar Product</h3>
          <table>
            <thead>
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Type</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="product-list">
              <td>1</td>
              <td>hahahaa</td>
              <td>hahahaa</td>
              <td>hahahaa</td>
              <td>hahahaa</td>
              <td>
                <div class="aksi-btn">
                    <a class="edit-btn btn-color" href="#">Edit</a>
                    <a class="remove-btn" href="#">Hapus</a>
                </div>
              </td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
