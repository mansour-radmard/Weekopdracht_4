tinymce.init({
  selector: 'textarea',
  height: 350,
  menubar: false,
  branding: false,
  plugins: "textcolor",
  toolbar: "forecolor backcolor",
  textcolor_cols: "5",
  toolbar: 'undo redo | formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat |',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
