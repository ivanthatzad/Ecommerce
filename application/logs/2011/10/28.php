<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-28 10:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webstandar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webstandar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-28 10:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:09:21 --- ERROR: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-10-28 10:09:21 --- STRACE: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\view.php(137): Kohana_View->set_filename('some/view/file')
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\view.php(30): Kohana_View->__construct('some/view/file', NULL)
#2 C:\Archivos de programa\webserver\kohana-3.2.0\modules\userguide\classes\kohana\kodoc\markdown.php(157): Kohana_View::factory('some/view/file')
#3 C:\Archivos de programa\webserver\kohana-3.2.0\modules\userguide\vendor\markdown\markdown.php(330): Kohana_Kodoc_Markdown->doIncludeViews('<h1 id="markdow...')
#4 C:\Archivos de programa\webserver\kohana-3.2.0\modules\userguide\vendor\markdown\markdown.php(64): Markdown_Parser->transform('# Markdown Synt...')
#5 C:\Archivos de programa\webserver\kohana-3.2.0\modules\userguide\classes\controller\userguide.php(159): Markdown('# Markdown Synt...')
#6 [internal function]: Controller_Userguide->action_docs()
#7 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Userguide))
#8 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#11 {main}
2011-10-28 10:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL i was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL i was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fhgja was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fhgja was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-28 10:52:05 --- ERROR: View_Exception [ 0 ]: The requested view errors/404 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-10-28 10:52:05 --- STRACE: View_Exception [ 0 ]: The requested view errors/404 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\view.php(137): Kohana_View->set_filename('errors/404')
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\view.php(30): Kohana_View->__construct('errors/404', NULL)
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(118): Kohana_View::factory('errors/404')
#3 {main}
2011-10-28 10:52:38 --- ERROR: View_Exception [ 0 ]: The requested view errors/404 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-10-28 10:52:38 --- STRACE: View_Exception [ 0 ]: The requested view errors/404 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\view.php(137): Kohana_View->set_filename('errors/404')
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\view.php(30): Kohana_View->__construct('errors/404', NULL)
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_View::factory('errors/404')
#3 {main}
2011-10-28 10:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(118): Kohana_Request->execute()
#3 {main}
2011-10-28 10:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(118): Kohana_Request->execute()
#3 {main}
2011-10-28 10:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 10:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(118): Kohana_Request->execute()
#3 {main}
2011-10-28 10:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ERROR 404. Página no encontrada. 

Clica aquí para volver a la Home. ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-28 10:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ERROR 404. Página no encontrada. 

Clica aquí para volver a la Home. ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\index.php(118): Kohana_Request->execute()
#1 {main}
2011-10-28 10:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ERROR 404. Página no encontrada. 

Clica aquí para volver a la Home. ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-28 10:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ERROR 404. Página no encontrada. 

Clica aquí para volver a la Home. ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_Request->execute()
#1 {main}
2011-10-28 10:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ERROR 404. Página no encontrada. 

Clica aquí para volver a la Home. ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-28 10:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ERROR 404. Página no encontrada. 

Clica aquí para volver a la Home. ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_Request->execute()
#1 {main}
2011-10-28 11:12:31 --- ERROR: ErrorException [ 4096 ]: Object of class Route could not be converted to string ~ DOCROOT\index.php [ 117 ]
2011-10-28 11:12:31 --- STRACE: ErrorException [ 4096 ]: Object of class Route could not be converted to string ~ DOCROOT\index.php [ 117 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Archivos de ...', 117, Array)
#1 {main}
2011-10-28 11:13:25 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
2011-10-28 11:13:25 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\Archivos de ...', 942, Array)
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(942): strpos(Object(Route), '://')
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_Request->redirect(Object(Route))
#3 {main}
2011-10-28 11:13:30 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
2011-10-28 11:13:30 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\Archivos de ...', 942, Array)
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(942): strpos(Object(Route), '://')
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_Request->redirect(Object(Route))
#3 {main}
2011-10-28 11:13:36 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
2011-10-28 11:13:36 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\Archivos de ...', 942, Array)
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(942): strpos(Object(Route), '://')
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_Request->redirect(Object(Route))
#3 {main}
2011-10-28 11:14:04 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
2011-10-28 11:14:04 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\Archivos de ...', 942, Array)
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(942): strpos(Object(Route), '://')
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_Request->redirect(Object(Route))
#3 {main}
2011-10-28 11:14:42 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
2011-10-28 11:14:42 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\Archivos de ...', 942, Array)
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(942): strpos(Object(Route), '://')
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_Request->redirect(Object(Route))
#3 {main}
2011-10-28 11:14:45 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
2011-10-28 11:14:45 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, object given ~ SYSPATH\classes\kohana\request.php [ 942 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\Archivos de ...', 942, Array)
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(942): strpos(Object(Route), '://')
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(117): Kohana_Request->redirect(Object(Route))
#3 {main}
2011-10-28 11:27:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ DOCROOT\index.php [ 110 ]
2011-10-28 11:27:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ DOCROOT\index.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-28 11:27:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::send_headers() ~ DOCROOT\index.php [ 119 ]
2011-10-28 11:27:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::send_headers() ~ DOCROOT\index.php [ 119 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-28 11:29:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::send_headers() ~ DOCROOT\index.php [ 122 ]
2011-10-28 11:29:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::send_headers() ~ DOCROOT\index.php [ 122 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-28 11:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-28 11:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-28 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(113): Kohana_Request->execute()
#3 {main}
2011-10-28 11:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 11:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(113): Kohana_Request->execute()
#3 {main}
2011-10-28 11:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-28 11:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-28 11:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmindsa was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 11:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmindsa was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(112): Kohana_Request->execute()
#3 {main}
2011-10-28 11:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmindsa was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 11:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmindsa was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 11:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-28 11:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#1 {main}
2011-10-28 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-28 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#1 {main}
2011-10-28 11:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmindas was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 11:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmindas was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 11:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmindas was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 11:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmindas was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 11:40:35 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\handler.php [ 9 ]
2011-10-28 11:40:35 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\handler.php [ 9 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\application\classes\controller\handler.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Archivos de ...', 9, Array)
#1 [internal function]: Controller_Handler->before()
#2 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Handler))
#3 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#6 {main}
2011-10-28 11:40:53 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\handler.php [ 9 ]
2011-10-28 11:40:53 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\handler.php [ 9 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\application\classes\controller\handler.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Archivos de ...', 9, Array)
#1 [internal function]: Controller_Handler->before()
#2 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Handler))
#3 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#6 {main}
2011-10-28 11:41:10 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\handler.php [ 9 ]
2011-10-28 11:41:10 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\handler.php [ 9 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\application\classes\controller\handler.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Archivos de ...', 9, Array)
#1 [internal function]: Controller_Handler->before()
#2 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Handler))
#3 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#6 {main}
2011-10-28 11:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL handler/404 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 11:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL handler/404 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 11:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-28 11:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/myadmin/myadmin.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#1 {main}
2011-10-28 11:52:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\welcome.php [ 9 ]
2011-10-28 11:52:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-28 12:00:27 --- ERROR: Kohana_Exception [ 0 ]: No configuration sources attached ~ SYSPATH\classes\kohana\config.php [ 87 ]
2011-10-28 12:00:27 --- STRACE: Kohana_Exception [ 0 ]: No configuration sources attached ~ SYSPATH\classes\kohana\config.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\modules\userguide\init.php(12): Kohana_Config->load('userguide.api_b...')
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\core.php(565): require_once('C:\Archivos de ...')
#2 C:\Archivos de programa\webserver\www\webstandar\application\bootstrap.php(111): Kohana_Core::modules(Array)
#3 C:\Archivos de programa\webserver\www\webstandar\index.php(102): require('C:\Archivos de ...')
#4 {main}
2011-10-28 12:01:03 --- ERROR: Kohana_Exception [ 0 ]: No configuration sources attached ~ SYSPATH\classes\kohana\config.php [ 87 ]
2011-10-28 12:01:03 --- STRACE: Kohana_Exception [ 0 ]: No configuration sources attached ~ SYSPATH\classes\kohana\config.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\modules\userguide\init.php(12): Kohana_Config->load('userguide.api_b...')
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\core.php(565): require_once('C:\Archivos de ...')
#2 C:\Archivos de programa\webserver\www\webstandar\application\bootstrap.php(111): Kohana_Core::modules(Array)
#3 C:\Archivos de programa\webserver\www\webstandar\index.php(102): require('C:\Archivos de ...')
#4 {main}
2011-10-28 12:01:15 --- ERROR: Kohana_Exception [ 0 ]: No configuration sources attached ~ SYSPATH\classes\kohana\config.php [ 87 ]
2011-10-28 12:01:15 --- STRACE: Kohana_Exception [ 0 ]: No configuration sources attached ~ SYSPATH\classes\kohana\config.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\modules\userguide\init.php(12): Kohana_Config->load('userguide.api_b...')
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\core.php(565): require_once('C:\Archivos de ...')
#2 C:\Archivos de programa\webserver\www\webstandar\application\bootstrap.php(111): Kohana_Core::modules(Array)
#3 C:\Archivos de programa\webserver\www\webstandar\index.php(102): require('C:\Archivos de ...')
#4 {main}
2011-10-28 12:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fr/welcome was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fr/welcome was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 12:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 12:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 12:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 12:49:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: lng ~ APPPATH\classes\controller\welcome.php [ 9 ]
2011-10-28 12:49:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: lng ~ APPPATH\classes\controller\welcome.php [ 9 ]
--
#0 C:\Archivos de programa\webserver\www\webstandar\application\classes\controller\welcome.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Archivos de ...', 9, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#6 {main}
2011-10-28 12:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 12:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 12:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 12:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 12:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fr/welcome was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fr/welcome was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}
2011-10-28 12:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-28 12:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/myadmin/myadmin.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Archivos de programa\webserver\kohana-3.2.0\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Archivos de programa\webserver\www\webstandar\index.php(110): Kohana_Request->execute()
#3 {main}