pipeline {
  agent any
  stages {
    stage('error') {
      parallel {
        stage('error') {
          steps {
            sh 'touch yele.php'
          }
        }
        stage('test') {
          steps {
            sh 'ls -al'
          }
        }
      }
    }
  }
  environment {
    test = ''
  }
}