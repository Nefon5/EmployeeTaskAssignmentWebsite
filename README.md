<img width="886" height="259" alt="image" src="https://github.com/user-attachments/assets/528480fc-2804-4159-9d0c-c703ce168f31" />
<img width="615" height="237" alt="image 16" src="https://github.com/user-attachments/assets/c9c4054e-dae0-4bf1-a062-9671831e8829" />
<img width="518" height="598" alt="image 15" src="https://github.com/user-attachments/assets/ee1ce45e-4221-4f65-ae64-dc85f61caecc" />
<img width="1919" height="1079" alt="image 14" src="https://github.com/user-attachments/assets/f9f254c2-a1db-4757-866b-28d47d7583e4" />
<img width="1919" height="1079" alt="image 13" src="https://github.com/user-attachments/assets/acd6bea0-3583-4053-b809-0aa63c05a830" />
<img width="619" height="866" alt="image 12" src="https://github.com/user-attachments/assets/389bd9fc-63a6-4e77-9139-6778c094e85a" />
<img width="1370" height="331" alt="image 11" src="https://github.com/user-attachments/assets/b9e6c0d2-5baa-46d6-96f3-3d749243f7c2" />
<img width="1919" height="1079" alt="image 10" src="https://github.com/user-attachments/assets/2eb48238-e051-4e10-a352-0f5f4cd86b9c" />
<img width="1919" height="1079" alt="image 9" src="https://github.com/user-attachments/assets/0d0f3017-2adc-463d-bd3c-bc236ddffd0f" />
<img width="715" height="805" alt="image 8" src="https://github.com/user-attachments/assets/3d8e72c1-85bc-413c-b3e9-127a073c67d8" />
<img width="562" height="518" alt="image 7" src="https://github.com/user-attachments/assets/db7e1ff5-23aa-41ef-9e39-e765234a1850" />
<img width="355" height="193" alt="image 6" src="https://github.com/user-attachments/assets/207856e3-ad30-476a-adb6-ebc710bc2482" />
<img width="1919" height="1079" alt="image 5" src="https://github.com/user-attachments/assets/cf8b848e-b4a7-406f-963c-f38ca8859f66" />
<img width="624" height="240" alt="image 4" src="https://github.com/user-attachments/assets/f5ad8d31-2993-44a0-be80-e5bd58122481" />
<img width="1919" height="1079" alt="image 3" src="https://github.com/user-attachments/assets/c64a8cda-ba7c-4cf5-9c5b-258f3a5f8bca" />
<img width="968" height="104" alt="image 2" src="https://github.com/user-attachments/assets/fdb3b3f8-39a7-4e71-b6d1-214888eaa0df" />
<img width="1093" height="159" alt="image 1" src="https://github.com/user-attachments/assets/cc7844e9-e2e8-4c53-b670-ab8c0e88c738" />

# EmployeeTaskAssignmentWebsite
An html website utilizing mysql and php to store,retrieve and display Employee Data, Task Data and allow users to choose their next task filtering for capabilities.

Built for 6006-Τεχνολογία Διαδικτύου στην Ψηφιακή Βιομηχανία at UNIWA | Industrial Design and Production Engineers Division by 23389209


## **Σενάριο και Εισαγωγή**

Η συγκεκριμενη εφαρμογή θα μπορούσε να τροποποιηθεί πολύ έυκολα για οποιαδήποτε εταιρεία αλλά δημιουργήθηκε συγκεκριμένα για μια εταιρεία μηχανικών. Επιχειρεί να οργανώσει και να αυτοματοποιήσει την καταγραφή δεδομένων των υπαλλήλων όπως όνομα, email και τις ικανότητες με τις οποίες μπορούν να συνεισφέρουν στην εργασία της επιχείρησης. Ταυτόχρονα καταγράφει τις εργασίες που πρέπει να πραγματοποιηθούν, εως πότε πρέπει να είναι έτοιμες και τι ικανότητες αυτές απαιτούν. 

Ένας υπάλληλος έχει πρόσβαση σε όλα αυτά τα δεδομένα επιτρέποντας του να επικοινωνήσει με του συνεργάτες του εύκολα και να αναλάβει όποια task επιθυμεί και είναι ικανός να πραγματοποιήσει. Προωθεί την αυτονομία των υπαλλήλων και την αίσθηση συνεργασίας στην επιχείρηση και επιτρέπει στους υπαλλήλους να έχουν μια ελευθερία στις εργασίες που πραγματοποιούν ώστε να επιλέγουν αυτές που προτιμούν.

---

## Αρχιτεκτονική και δομή βάσης δεδομένων

Η εφαρμογή αναπτύχθηκε με VS Code κάνωντας χρήση xampp και συγκεκριμένα apache και mySQL(php myadmin interface)

Από άποψη mySQL αποτελείται από δύο πίνακες

Ο πρώτος πίνακας employeeinfo περιλαμβάνει τις πληροφορίες των υπαλλήλων και έχει την παρακάτω μορφή:

![image.png](image.png)

Ο δεύτερος πίνακας job info περιλαμβάνει τις απαραίτητες πληροφορίες για τις εργασίες. Σημείωνεται ότι έδω capabilities όπως welding αποτυπώνουν την απαίτηση γνώσης για να αναλάβει ένας υπάλληλοςτην εργασία

![image.png](image%201.png)

Η εφαρμογή έχει 4 βασικές λειτουργικές σελίδες

Όλες οι σελίδες έχουν κοινή την link bar που χρησιμοποιείται για την πλοήγηση στην εφαρμογή δίνοντας εύκολη πρόσβαση σε όλες τις σελίδες που απαιτούνται.

Κώδικας δημιουργίας της link bar

![image.png](image%202.png)

H πρώτη σελίδα αποτυπώνει σε πίνακα τα χαρακτηριστικά των υπαλλήλων( εκτός του passcode για προφανείς λόγους)

![image.png](image%203.png)

Οι πληροφορίες γράφονται στον πίνακα με παρόμοιο τρόπο που γράφονται στο πίνακα εργασίων ο οποίος επιδεικνύεται αργότερα

Όπως και κάθε σελίδα που απαιτεί σύνδεση με database πρέπει να έχει τον παρακάτω κώδικα για διαχείριση της σύνδεσης.

![image.png](image%204.png)

Η δεύτερη σελίδα καταγράφει σε πίνακα τις εργασίες που πρέπει να ολοκληρωθούν και τις σχετικές πληροφορίες που χρειάζεται κάποιος για να τις αναλάβει. Καραγράφει επίσης αν κάποιος την έχει αναλάβει και ποιός είναι καθώς και τις απαιτήσεις.

Κάτω από τον πίνακα υπάρχει φόρμα εισαγωγής η οποία επιτρέπει την επιλογή εργασίων μετά από έλεγχο για τις ικανότητες του υπαλλήλου. Αν κάποια από τις προυποθέσει δεν πληρείται αρνείται και εμφανίζει το μήνυμα σφάλματος που φάινεται στην δέυτερη εικόνα

![image.png](image%205.png)

![image.png](image%206.png)

Ο κώδικας που χρησιμοποιείται για την εισαγωγή δεδομένων στον πίνακα. Παρόμοιος πίνακας χρησιμοποιήθηκε και στο employeeinfo Table.

![image.png](image%207.png)

Και ο κώδικας που χρησιμοποιείται για τον έλεγχο λογικής στα capabilities.

![image.png](image%208.png)

Η τρίτη και η τέταρτη σελίδα είναι φόρμες εισαγωγής καινούριων δεδομένων στους πινακες employee info και job info. Έχουν άμεση σύνδεση με το database και ανεβάζουν κατευθείαν τα δεδομένα τους στην σωστή θέση

![image.png](image%209.png)

![image.png](image%2010.png)

Ο κώδικας μορφοποίησης και εισαγωγής των δεδομένων στην sql database

![image.png](image%2011.png)

Δημιουργία φόρμας εισαγωγής δεδομένων στο html

![image.png](image%2012.png)

## Διαδικασία ανάπτυξης εφαρμογής

Η εφαρμογή αναπτύχθηκε με την υιοθέτηση μια προσέγγισης από κάτω προς τα πάνω. Πρώτα σε επίπεδο σχεδιασμού καθορίστηκε το εύρος της εφαρμογής και ο τρόπος υλοποίησης των απαραίτητων λειτουργίων. Ύστερα δημιουργήθηκαν οι κατάλληλοι πίνακες sql και μόνο τότε άρχισε η δημιουργία του html ιστότοπου. Το html αναπτύχθηκε βαθμίαια, πρώτα με την εισαγωγή δεδομένων στο database, μετά με την προβολή τους σε πίνακες, μετά με την λογική και τέλος μόνο με την αισθητική και την μορφή της ιστοσελίδας. Το τελευταίο βήμα ήταν η ανάπτυξη της δικτύωσης στο cisco packet tracer.

## Δικτύωση

Η τοπολογία του δικτύου στο cisco packet tracer έχει την εξής μορφή

![image.png](image%2013.png)

Πρόσβαση στον ιστότοπο του project από το PC0 το οπόιο είναι σε διαφορετικό δίκτυο από του server. Φυσικά η ιστοσελίδα δεν είναι πλήρως λειτουργική καθώς οι προσωμοιομέονοι υπολογιστές του cisco packet tracer είναι πολύ απλοϊκοί και δεν περιλάμβανουν mysql.

![image.png](image%2014.png)

Αποτέλεσμα ping και tracert από το PC0 στην ip του server. To ping επιδεικνύει την συνδεσιμότητα και το tracert την χρήση των router και των διαφορετικών network

![image.png](image%2015.png)

show ip route σε ένα από τα router επιδεικνύοντας την επιτυχή χρήση του προτόκολου OSPF

![image.png](image%2016.png)
