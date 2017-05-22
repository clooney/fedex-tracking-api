# FedEx tracking  api
FedEx tracking API and webhook make it easy to integrate FedEx Tracking function into your own project. Support APIs Client Libraries for PHP

### API key

In order to use this API, you need to generate a FedEx Tracking  API key in the [TrackingMore](https://www.trackingmore.com).
Apply for free use of API. https://www.trackingmore.com/apply-api.html

### List of Tracking Status

String | Description 
----|------
pending | New shipments added that are pending to track
notfound |	Item is not found at this moment.
transit	| Item has shipped from originating and is en route to its destination
pickup	| Item is out for delivery or arrived at local facility, you may schedule for delivery or pickup
delivered |	The shipment was delivered sucessfully.
undelivered	| Carrier attempted to deliver but failed, and usually leaves a notice and will try to delivery again.
exception | Item might undergo unusual shipping condition, this may due to several reasons, most likely item was returned to sender, customs issue, lost, damaged etc.
expired	| Item was in transportation period for a long time still has no delivered results.

### Typical Server Responses

We will respond with one of the following status codes.

Code | Description
----|------
200	| OK - The request was successful (some API calls may return 201 instead).
201	|Created - The request was successful and a resource was created.
202 |	Created - The request was successful but exceeding the limit.
401	|Unauthorized - Authentication failed or user does not have permissions for the requested operation.
4001|	Unauthorized - Invalid API key.
4002|	Unauthorized - API key has been deleted.
4012	|Bad Request - The request could not be understood or was missing required parameters.
4013|	Bad Request - Tracking_number is required.
4014|	Bad Request - The value of `tracking_number` is invalid.
4015|	Bad Request - The value of `carrier_code` is invalid.
4016|	Bad Request - Tracking already exists.
4017|	Bad Request - Tracking does not exist.
4018|	Bad Request - Due to overload risks this feature requires custom activation. Contact service@trackingmore.org for more information.
4020|	Bad Request - Up to 200 at a time
4021|	Bad Request - Your remaining balance is not enough, so you can not call the API request data.
4031|	No Content - The request was successful but the response is empty.
4032|	No Content - Cannot detect courier.
4033	|No Content - The value of `status` is invalid.
402	|Payment Required - Payment required.
403	|Forbidden - Access denied.
404|	Not Found - Resource was not found.
405	|Method Not Allowed - Requested method is not supported for the specified resource.
409	|Conflict - The request could not be completed due to a conflict.
429|	Too Many Requests - Exceeded API limits. Pause requests, wait two minute, and try again.
500	|Server error
503	|Service Unavailable - The service is temporary unavailable (e.g. scheduled Platform Maintenance). Try again later.

------------------------------------------------------------------------------------------------------------------
[TrackingMore](https://www.trackingmore.com) offers multiple carrier solutions. Developers can get tracking results from 410+ couriers by integrating trackingmore API. Use FedEx Tracking API of Trackingmore allows eCommerce developers in any sizes to add package tracking function easily. Use [FedEx Tracking API](https://www.trackingmore.com/fedex-tracking.html) to:

   *   Get FedEx realtime tracking info of muti-carriers in one integration
   *   Provide FedEx shipment tracking experience like Amazon
   *   Push FedEx notifications of package update with webhook
   *   Verify FedEx delivery exception before it is too late

