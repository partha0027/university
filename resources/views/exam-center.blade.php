@extends('layout.master')
@section('exam-center')
@section('title', 'Exam Center')


<section class="section video section contact" data-section="section5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 px-5 py-5">
                @include('vertical-nav')

            </div>
            <div class="col-md-10 px-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Exam Center</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered text-start table-striped" id="data-table">
                            <thead>
                                <tr>
                                    <th>Exam Center</th>
                                </tr>
        
                            </thead>
                            <tbody>
                                <!-- Sample table data (replace with your own data) -->
        
                                <tr>
                                    <td>Goreswar College</td>
        
                                </tr>
                                <tr>
                                    <td>Goreswar College</td>
        
                                </tr>
                                <tr>
                                    <td>Goreswar College</td>
        
                                </tr>
                                <tr>
                                    <td>Goreswar College</td>
        
                                </tr>
                                <tr>
                                    <td>Goreswar College</td>
        
                                </tr>
                                <tr>
                                    <td>Goreswar College</td>
        
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
        
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center" id="pagination">
                                <li class="page-item active" id="previous-page">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
        
        
        
                </div>
            </div>
        </div>
       
    </div>

    <script>
        // Sample data (replace with your own data)
        const sampleData = [

            {
                ExamCenter: "Goreswar College"

            },

            {
                ExamCenter: "B. H. College, Howly"

            },

            {
                ExamCenter: "Barnagar College"

            },

            {
                ExamCenter: "Bhabanipur Anchalik College"

            },

            {
                ExamCenter: "M.C. College"

            },

            {
                ExamCenter: "N.H. College"

            },
            {
                ExamCenter: "N.H. College"

            },
            {
                ExamCenter: "N.H. College"

            },
            {
                ExamCenter: "N.H. College"

            },
            {
                ExamCenter: "N.H. College"

            },
            {
                ExamCenter: "N.H. College"

            },
            {
                ExamCenter: "N.H. College"

            },
            {
                ExamCenter: "N.H. College"

            },

            // Add more data here
        ];

        const itemsPerPage = 5;
        let currentPage = 1;

        function updateTable(page) {
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const slicedData = sampleData.slice(startIndex, endIndex);

            const tbody = document.querySelector('#data-table tbody');
            tbody.innerHTML = '';

            slicedData.forEach((item) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.ExamCenter}</td>
                  
                `;
                tbody.appendChild(row);
            });
        }

        function updatePagination() {
            const totalPages = Math.ceil(sampleData.length / itemsPerPage);
            const pagination = document.querySelector('#pagination');
            pagination.innerHTML = '';

            const previousLi = document.createElement('li');
            previousLi.classList.add('page-item');
            previousLi.id = 'previous-page';
            const previousLink = document.createElement('a');
            previousLink.classList.add('page-link');
            previousLink.href = '#';
            previousLink.textContent = 'Previous';

            previousLink.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    updateTable(currentPage);
                    updatePagination();
                }
            });

            previousLi.appendChild(previousLink);
            pagination.appendChild(previousLi);

            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement('li');
                li.classList.add('page-item');
                const link = document.createElement('a');
                link.classList.add('page-link');
                link.href = '#';
                link.textContent = i;

                link.addEventListener('click', () => {
                    currentPage = i;
                    updateTable(currentPage);
                    updatePagination();
                });

                li.appendChild(link);
                pagination.appendChild(li);
            }

            const nextLi = document.createElement('li');
            nextLi.classList.add('page-item');
            const nextLink = document.createElement('a');
            nextLink.classList.add('page-link');
            nextLink.href = '#';
            nextLink.textContent = 'Next';

            nextLink.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    updateTable(currentPage);
                    updatePagination();
                }
            });

            nextLi.appendChild(nextLink);
            pagination.appendChild(nextLi);
        }

        // Initial setup
        updateTable(currentPage);
        updatePagination();
    </script>


</section>

@endsection
