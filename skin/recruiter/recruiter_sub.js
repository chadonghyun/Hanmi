let list_recruiter = document.querySelectorAll('.recruiter_list_content > table > tbody > tr > td:nth-of-type(2) > a');
let recruiterModal = document.querySelector('#recruiterModal'); // dialog 모달
const request = new XMLHttpRequest(); // 리퀘스트 가져오는 객체

for(recruiter of list_recruiter){
  recruiter.addEventListener('click', function(){
    request.open('GET', '/sub/recruiter_modal_view.php?idx='+this.dataset.idx, true);
    request.send();
    document.querySelector('body').style.overflow = 'hidden';
    request.onload = () => {
      recruiterModal.innerHTML = request.responseText;
      recruiterModal.showModal();
      recruiterModal.scrollTop = 0;
    };
  });
}

recruiterModal.addEventListener('click', (event) => {
  if (event.target.nodeName === 'DIALOG') {
    recruiterModal.close();
    document.querySelector('body').removeAttribute('style');
  }
});