import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  form = new FormGroup({
  correo: new FormControl(''),
  clave: new FormControl('')
  });

  constructor(
    private data:DataService,
    private router:Router
  ) { }

  ngOnInit(): void {
  }
  
  login(){
    this.data.login(this.form.value).subscribe(function(res){
      let token = res['token'];

      localStorage.setItem('token', token);
    });
  }

  signup(){
    this.router.navigate(['/signup', { id: 100 }]);
  }

}
