# Software Engineer for QA - Test

Goal of this exercise is to showcase how you would
1. integrate a new application into a continuous integration pipeline.
2. setup the basic requirements for a pipeline to ensure that no regression issues appear.

## Tasks
Your entrypoint for the tasts will be the [start.sh](start.sh) in the root folder. When you run it, it will start a Jenkins server and mount the `jenkins_home` into your project folder. Don't forget to commit your `jenkins_home`.

Add whatever files you feel are necessary. If you have to change the [start.sh](start.sh) as well, do so. It will be our entrypoint to check the results of the challenge as well.

### 1. Create a pipeline
Create a Jenkins pipeline that builds the [Dockerfile](sample-application/Dockerfile) in the `sample-application/`.
To ensure that no regression appears in future development of the application, create a pipeline step that executes any unit tests which are part of the project.

### 2. Add E2E/API testing
During the last couple of deployments it happened that there were regression issues even though the unit tests were successful.
Add another layer of testing to the pipeline and execute E2E/API tests for the sample application. It is fine if only one endpoint is covered.
You can choose whatever framework or technology you prefer.

### 3. Code quality (optional!)
To ensure all developers follow certain coding standards and the code is tested for common coding mistakes it makes sense to automatically check for code quality. Therefore, add an additional step to the Jenkins pipeline to ensure continuous code quality checks.

## Hints
- You will need to install [docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/) / [docker native for mac](https://docs.docker.com/docker-for-mac/install/).
- If you don't have a Mac or Linux, use a virtual machine for better compatibility.
- If you are not familiar with docker, read the docs for: [build](https://docs.docker.com/engine/reference/commandline/build/), [run](https://docs.docker.com/engine/reference/commandline/run/), [exec](https://docs.docker.com/engine/reference/commandline/exec/)
- Documentation on how to run the sample application can be found [here](sample-application/README.md).
- After you ran [start.sh](start.sh) a Jenkins server will run on your docker host on port `8080`


##my_Hints
- Delete all docker images 
 $ docker system prune -a
- Show all container
 $ docker-compose ps
- Fix minor problem with docker images
 $ docker-compose up --force-recreate