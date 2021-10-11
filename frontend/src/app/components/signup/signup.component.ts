import { Component, OnInit } from '@angular/core';
import { DataService } from '../../services/data.service';
import { NgForm, FormGroup, FormControl } from '@angular/forms';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  constructor(
    private data:DataService
  ){}
    ngOnInit(): void {
      // this.data.saludar();
    }
  }
  
