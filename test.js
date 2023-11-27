function validatePhoneNumber(phoneNumber) {
    // Regular expression to match a phone number in the format XXX-XXX-XXXX
    var phonePattern = /^(?!([0-9])\1{2}-\1{3}-\1{4}$)\d{3}-\d{3}-\d{4}$/;
    
    // Check if the provided phone number matches the pattern
    return phonePattern.test(phoneNumber);
  }
  function verifyPhoneNumber(phoneNumber){
    // const phoneNumber = document.querySelector('.inputPhone').value;
    let pattern = /^(?!([0-9])\1{2}\1{3}\1{4}$)\d{3}\d{3}\d{4}$/;
    if(pattern.test(phoneNumber))
        return true;
    else {
        alert('Invalid Phone Number');
        return false;
    }
}
  // Example usage
  var phoneNumber = "9876543210";
  console.log(validatePhoneNumber(phoneNumber))