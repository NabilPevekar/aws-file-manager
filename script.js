
document.getElementById('uploadButton').addEventListener('click', function () {

  const fileInput = document.createElement('input');
  fileInput.type = 'file';
  fileInput.multiple = true; // Allow multiple file selection
  fileInput.accept = '.jpg, .png, .pdf'; // Specify allowed file types
  
  fileInput.addEventListener('change', function (event) {
    const selectedFiles = event.target.files;
    

  });
  

  fileInput.click();
});


const fileList = document.getElementById('fileList'); // Replace with your actual element


function listFiles(files) {
  files.forEach(function (file) {
    const listItem = document.createElement('li');
    listItem.textContent = file.name; // Display the file name
    
 
    fileList.appendChild(listItem);
  });
}


const sampleFiles = [
  { name: 'file1.jpg', size: '2MB', type: 'image/jpeg' },
  { name: 'file2.pdf', size: '1.5MB', type: 'application/pdf' },
];

listFiles(sampleFiles);
