pipeline {
  agent any
  stages {
    stage('error') {
      parallel {
        stage('error') {
          steps {
            sh 'date'
          }
        }
        stage('test') {
          steps {
            sh 'date'
          }
        }
      }
    }
  }
  environment {
    test = ''
  }
}