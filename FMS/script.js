const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
});
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
});

document.addEventListener('DOMContentLoaded', () => {
    const categoryPage = document.querySelector('body').classList.contains('category-page');
    const subcategoryPage = document.querySelector('body').classList.contains('subcategory-page');
    const documentsPage = document.querySelector('body').classList.contains('documents-page');

    if (categoryPage) {
        setupCategoryPage();
    } else if (subcategoryPage) {
        setupSubcategoryPage();
    } else if (documentsPage) {
        setupDocumentsPage();
    }

    // Setup event listeners for the category addition
    const addCategoryBtn = document.querySelector('.add-category button');
    if (addCategoryBtn) {
        addCategoryBtn.addEventListener('click', toggleAddCategory);
    }

    const submitCategoryBtn = document.querySelector('.submit-button');
    if (submitCategoryBtn) {
        submitCategoryBtn.addEventListener('click', addCategory);
    }
});

function setupCategoryPage() {
    const links = document.querySelectorAll('#categoryList a');
    links.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const category = link.textContent.toLowerCase().replace(/\s+/g, '-');
            window.location.href = `button.php?category=${category}`;
        });
    });
}

function setupSubcategoryPage() {
    const urlParams = new URLSearchParams(window.location.search);
    const category = urlParams.get('category');
    document.getElementById('categoryTitle').textContent = `Subcategories for ${category.replace(/-/g, ' ')}`;
    loadSubcategories(category);
}

function setupDocumentsPage() {
    const urlParams = new URLSearchParams(window.location.search);
    const category = urlParams.get('category');
    const subcategory = urlParams.get('subcategory');
    document.getElementById('subcategoryTitle').textContent = `Documents for ${category.replace(/-/g, ' ')} > ${subcategory.replace(/-/g, ' ')}`;
    loadDocuments(category, subcategory);
}

function toggleAddCategory() {
    const form = document.getElementById('addCategoryForm');
    form.classList.toggle('hidden');
}

function addCategory() {
    const categoryList = document.getElementById('categoryList');
    const newCategoryName = document.getElementById('newCategoryName').value.trim();

    if (newCategoryName !== "") {
        const newCategoryItem = document.createElement('li');
        const newCategoryLink = document.createElement('a');
        newCategoryLink.href = `button.php?category=${newCategoryName.toLowerCase().replace(/\s+/g, '-')}`;
        newCategoryLink.textContent = newCategoryName;
        newCategoryItem.appendChild(newCategoryLink);
        categoryList.appendChild(newCategoryItem);

        // Clear the input field
        document.getElementById('newCategoryName').value = "";
        toggleAddCategory();

        // Add click event for the new category link
        newCategoryLink.addEventListener('click', (event) => {
            event.preventDefault();
            const category = newCategoryName.toLowerCase().replace(/\s+/g, '-');
            window.location.href = `button.php?category=${category}`;
        });
    } else {
        alert("Please enter a category name.");
    }
}

function loadSubcategories(category) {
    const subcategoryList = document.getElementById('subcategoryList');
    subcategoryList.innerHTML = ''; // Clear existing content
    // Example subcategories based on category
    const subcategories = {
        'railway-board': ['Policy', 'Notice', 'Office Order'],
        'accounts': ['Invoices', 'Budget', 'Reports'],
        'personnel': ['Employee Records', 'Payroll', 'Recruitment'],
        'sandt': ['Non-suburban', 'Suburban', 'Halt'],
        'rpf': ['Employee List', 'Payroll', 'Recruitment'],
        'commercial': ['Records', 'Payment', 'Recruitment'],
        // Add more subcategories as needed
    };

    const subcategoryItems = subcategories[category] || [];
    subcategoryItems.forEach(sub => {
        const listItem = document.createElement('li');
        const link = document.createElement('a');
        link.href = `button.php?category=${category}&subcategory=${sub.toLowerCase().replace(/\s+/g, '-')}`;
        link.textContent = sub;
        listItem.appendChild(link);
        subcategoryList.appendChild(listItem);
    });
}

function loadDocuments(category, subcategory) {
    const documentTable = document.getElementById('documentTable');
    documentTable.innerHTML = `
        <tr>
            <th>SL NO</th>
            <th>DATE OF PUBLISH</th>
            <th>SUBJECT</th>
            <th>DOCUMENT</th>
            <th>ADD/EDIT/DELETE</th>
        </tr>
    `; // Clear existing content

    // Example documents (should be fetched from a server or local storage)
    const documents = [
        { slNo: 1, date: '03.06.2024', subject: 'SUBJECT 1', doc: 'Doc 1' },
        { slNo: 2, date: '03.05.2024', subject: 'SUBJECT 2', doc: 'Doc 2' },
        { slNo: 3, date: '03.04.2024', subject: 'SUBJECT 3', doc: 'Doc 3' },
        { slNo: 4, date: '03.03.2024', subject: 'SUBJECT 4', doc: 'Doc 4' }
    ];

    documents.forEach(doc => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${doc.slNo}</td>
            <td>${doc.date}</td>
            <td>${doc.subject}</td>
            <td><a href="#">${doc.doc}</a></td>
            <td>
                <button onclick="editDocument(${doc.slNo})">Edit</button>
                <button onclick="deleteDocument(${doc.slNo})">Delete</button>
            </td>
        `;
        documentTable.appendChild(row);
    });
}

function addDocument() {
    const documentTable = document.getElementById('documentTable');
    const row = document.createElement('tr');
    row.innerHTML = `
        <td><input type="text" placeholder="SL NO"></td>
        <td><input type="date" placeholder="DATE OF PUBLISH"></td>
        <td><input type="text" placeholder="SUBJECT"></td>
        <td><input type="text" placeholder="DOCUMENT"></td>
        <td>
            <button onclick="saveDocument(this)">Save</button>
            <button onclick="deleteDocumentRow(this)">Delete</button>
        </td>
    `;
    documentTable.appendChild(row);
}

function saveDocuments() {
    // Implement save logic (e.g., send data to server or save to local storage)
    alert('Documents saved!');
}

function editDocument(slNo) {
    const rows = document.querySelectorAll('#documentTable tr');
    rows.forEach(row => {
        if (row.cells[0].textContent == slNo) {
            row.cells[0].innerHTML = `<input type="text" value="${slNo}">`;
            row.cells[1].innerHTML = `<input type="date" value="${row.cells[1].textContent}">`;
            row.cells[2].innerHTML = `<input type="text" value="${row.cells[2].textContent}">`;
            row.cells[3].innerHTML = `<input type="text" value="${row.cells[3].textContent}">`;
            row.cells[4].innerHTML = `
                <button onclick="saveDocument(this)">Save</button>
                <button onclick="deleteDocumentRow(this)">Delete</button>
            `;
        }
    });
}

function deleteDocument(slNo) {
    const rows = document.querySelectorAll('#documentTable tr');
    rows.forEach(row => {
        if (row.cells[0].textContent == slNo) {
            row.remove();
        }
    });
}

function deleteDocumentRow(button) {
    button.parentElement.parentElement.remove();
}

function saveDocument(button) {
    const row = button.parentElement.parentElement;
    const cells = row.querySelectorAll('td');
    const slNo = cells[0].querySelector('input').value;
    const date = cells[1].querySelector('input').value;
    const subject = cells[2].querySelector('input').value;
    const document = cells[3].querySelector('input').value;

    cells[0].innerHTML = slNo;
    cells[1].innerHTML = date;
    cells[2].innerHTML = subject;
    cells[3].innerHTML = `<a href="#">${document}</a>`;
    cells[4].innerHTML = `
        <button onclick="editDocument(${slNo})">Edit</button>
        <button onclick="deleteDocument(${slNo})">Delete</button>
    `;
}

document.addEventListener('DOMContentLoaded', function() {
    var splashScreen = document.getElementById('splashScreen');
    var splashVideo = document.getElementById('splashVideo');
    var mainContent = document.getElementById('mainContent');

    splashVideo.onended = function() {
                // Hide the splash screen
                splashScreen.style.display = 'none';
                // Show the main content
                mainContent.style.display = 'block';
            };
        
            // Fallback in case the video does not end (user can skip it)
            setTimeout(function() {
                splashScreen.style.display = 'none';
                mainContent.style.display = 'block';
            }, splashVideo.duration * 1000);
});
