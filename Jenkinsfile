pipeline {
  agent any
  stages {
    stage('error') {
      parallel {
        stage('error') {
          steps {
            sh 'ls -al'
          }
        }
        stage('test') {
          steps {
            sh 'echo sherjeel jenkins'
          }
        }
      }
    }
  }
  environment {
    test = ''
  }
}