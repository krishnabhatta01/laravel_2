


<main id="main" class="main">

    <div class="pagetitle">
  

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item">Create</li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">Create blog Form</h5>

                        <!-- Floating Labels Form -->
                        <form class="row g-3" method="POST" action="/blog" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="title" value="" required>
                                    <label for="floatingName">Title</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="floatingName" name="image"  required>
                                    <label for=" floatingName">Image</label>
                                    <img src="" width=100%>
                                </div>
                            </div>


                            <!-- End floating Labels Form -->
                    </div>
                </div>



            </div>



            <!-- editior section -->
            <div class=" col-lg-6">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            <div class="m-3">
                                <label for="description"></label>
                                <textarea name="description" id="" cols="30" rows="10" required>
                               
                               </textarea>
                            </div>
                        </div>

                    </div>

                </section>
            </div>
            <div class=" text-center">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">

            </div>
            </form>

        </div>
    </section>

</main>

