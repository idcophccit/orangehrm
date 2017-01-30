/**
* @api {get} /employee/search Employee Search
* @apiName SearchEmployee
* @apiGroup Employee
*
* @apiParam {String} [name] employee name
* @apiParam {Number} [id] employee Id
* @apiParam {String} [status] employee status
* @apiParam {String} [supervisor] supervisor name
* @apiParam {String} [jobtitle] employee job title
* @apiParam {String} [unit] Employee Unit
* @apiParam {String} [dob] employee birth day
* @apiParam {String} [gender] employee gender
* @apiParam {Number} [limit] record limit
*
* @apiSuccess {Object} data Matching Employee list
* @apiSuccess {Object} rels  API relations.
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*       {
*         "data":[
    *         {
    *             "id": "001",
    *             "firstName": "John",
    *             "lastName": "Doe",
    *             "middleName": "",
    *             "fullName": "John Doe",
    *             "status": "active",
    *             "jobtitle": "web developer",
    *             "supervisor": "Mike com",
    *             "supervisorId": "2",
    *             "dob": "1989-09-7",
    *             "unit": "development",
    *             "gender": "M"
    *         },
    *         {
    *             "id": "002",
    *             "firstname": "John",
    *             "lastname": "Mass",
    *             "middleName": "",
    *             "fullName": "John Mass",
    *             "status": "active",
    *             "jobtitle": "web developer",
    *             "supervisor": "Simon English",
    *             "supervisorId": "2",
    *             "dob": "1989-09-7",
    *             "unit": "development",
    *             "gender": "M"
    *         }
*       ],
*       "rels": {
*         "next": "/employee/search?page=3",
*          "previous": "/employee/search?page=1"
*       }
*     }
*
*
* @apiError EmployeeNotFound.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 404 Not Found
*     {
*       "error": "EmployeeNotFound"
*     }
*/
