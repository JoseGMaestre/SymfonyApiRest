restapi
=======

A Symfony project created on May 3, 2016, 9:50 am.
# SymfonyApiRest


**Ejmplo de un API REST on Symfony 2.8.
 +
  Configuracion 
  ============

fos_rest:
    routing_loader:
        default_format: json
    param_fetcher_listener: true
    body_listener: true
    #disable_csrf_role: ROLE_USER
    body_converter:
       enabled: true
    view:
        view_response_listener: force
 
routing.yml

materias:
  type:   rest
  prefix: api
  resource: AppBundle\Controller\MateriasController
  

Entity.Materia-yml

AppBundle\Entity\Materia:
  exclusion_policy: ALL
  properties:
    id:
      expose: true
    cal:
       expose: true
    materia:
        expose: true



