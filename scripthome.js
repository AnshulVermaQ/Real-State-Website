
  document.getElementById('dynamicForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;

  
    var confirmationMessage = document.getElementById('confirmationMessage');
    confirmationMessage.textContent = 'Your information is submitted!';
    confirm("Do you want to submit:" + "      " +  firstName
    + " " + lastName + " " + phone + " " + email );
    alert("Your information is Submitted: " +"       "+ firstName
     + " " + lastName + " " + phone + " " + email);
    confirmationMessage.style.display = 'block';

    
    document.getElementById('firstName').value = '';
    document.getElementById('lastName').value = '';
    document.getElementById('phone').value = '';
    document.getElementById('email').value = '';


    setTimeout(function() {
      confirmationMessage.style.display = 'none';
    }, 5000);
    
  });

  