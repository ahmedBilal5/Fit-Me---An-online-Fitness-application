DROP TABLE DailyExercise;
DROP TABLE Exercise;
DROP TABLE DailyNutrition;
DROP TABLE Nutrition;
DROP TABLE Equipment;
DROP TABLE MuscleGroup;




DROP TABLE Log;
DROP TABLE ExtraPhysicalAttr;
DROP Table PhysicalUpdates;
DROP TABLE UserAccount;
DROP TABLE DailyTargets;

DROP TABLE Plan;
DROP TABLE FitnessGoal;




CREATE TABLE Nutrition
(Name varchar(30),
RewardValue number(3,2),
Fats number(3),
Protein number(3),
Carbohydrates number(3),
Fiber number(3),
PRIMARY KEY (Name));

CREATE TABLE Equipment
(EquipmentName varchar(15),
Description varchar(200),
PRIMARY KEY (EquipmentName));

CREATE TABLE MuscleGroup
(MuscleGroupName varchar(25),
Description varchar(200),
PRIMARY KEY (MuscleGroupName));


CREATE TABLE Exercise
(ExerciseName varchar(25),
RewardValue number(3,2),
MuscleGroupName varchar(25),
EquipmentRequired varchar(15),
PRIMARY KEY (ExerciseName),
FOREIGN KEY (MuscleGroupName) REFERENCES MuscleGroup (MuscleGroupName),
FOREIGN KEY (EquipmentRequired) REFERENCES Equipment (EquipmentName));


CREATE TABLE FitnessGoal
(Name varchar(25),
Description varchar(100),
PRIMARY KEY (Name));


CREATE TABLE ExtraPhysicalAttr
(Name varchar(25),
Description varchar(25),
PRIMARY KEY (Name));


CREATE TABLE Plan
(PlanID number(3),
Goal varchar(25),
PRIMARY KEY (PlanID),
FOREIGN KEY (Goal) REFERENCES FitnessGoal (Name));


CREATE TABLE UserAccount
(Username varchar(20),
Password varchar(20),
Name varchar(20),
Age number(3),
Height number(8,3),
Weight number(3),
BMI number(8,2),
PlanID number(3),
TotalReward number(4),
PRIMARY KEY (Username),
FOREIGN KEY (PlanID) REFERENCES Plan (PlanID));


CREATE TABLE PhysicalUpdates
(Date1 DATE,
Username varchar(20),
Weight number(3),
Height number(8,3),
PRIMARY KEY (Date1),
FOREIGN KEY (Username) REFERENCES UserAccount (Username));


CREATE TABLE DailyTargets
(DayName varchar(10),
PlanId number(3),
PRIMARY KEY (DayName,PlanId),
FOREIGN KEY (PlanID) REFERENCES Plan (PlanID));


CREATE TABLE DailyNutrition
(nutritionName varchar(30),
DayName varchar(10),
PlanID number(3),
DayFrequency number(3),
Foreign Key (nutritionName) REFERENCES Nutrition (Name),
FOREIGN KEY (DayName,PlanID) REFERENCES DailyTargets (DayName,PlanID)
);

CREATE TABLE DailyExercise
(DayName varchar(10),
PlanID number(3),
ExerciseName varchar(25),
NoOfSets number(3),
NoOfReps number(3),
Foreign KEY (PlanID,DayName) REFERENCES DailyTargets (PlanID,DayName),
FOREIGN KEY (ExerciseName) REFERENCES Exercise (ExerciseName),
FOREIGN KEY (PlanID) REFERENCES Plan(PlanID));

CREATE TABLE LOG
(Username varchar(20),
PlanID number(3),
DayName varchar(10),
RewardGained number(3),
RewardUpdateStatus number(1),
DateLog Date,
FOREIGN KEY (Username) REFERENCES UserAccount (Username),
FOREIGN KEY (PlanID) REFERENCES Plan (PlanID),
FOREIGN KEY (PlanID,DayName) REFERENCES DailyTargets (PlanID,DayName));



INSERT ALL
INTO Equipment values('Treadmill','The treadmill is a great way to practice walking or running')
INTO Equipment values('Stair mill','Stair mill literally allows you to simulate walking upstairs on an endless cycle')
INTO Equipment values('Spin bike','It closely simulates the feeling of being on an outdoor bike with all the benefits of being indoors')
INTO Equipment values('Dumbbell','A fixed weight dumbbell is simply a handheld weight, set at a fixed weight that you can perform a series of thousands of exercises with')
INTO Equipment values('Kettlebell','Kettlebells are a fantastic way to target the entire body and engage stabilization muscles through the performance of smooth, free flowing movements')
INTO Equipment values('Exercise mat','An exercise mat is a comfortable platform for you to perform core and bodyweight exercises on')
Select * from dual;


INSERT ALL
INTO MuscleGroup VALUES('Biceps','The biceps is a muscle on the front part of the upper arm. The biceps includes a “short head” and a “long head” that work as a single muscle')
INTO MuscleGroup VALUES('Triceps','The triceps is a large muscle on the back of the upper limb of many vertebrates')
INTO MuscleGroup VALUES('Quadriceps','The quadriceps femoris is a group of muscles located in the front of the thigh')
INTO MuscleGroup VALUES('Abs','Abs are paired muscles running vertically on each side of the anterior wall of the human abdomen')
INTO MuscleGroup VALUES('Chest','The pectoral region is located on the anterior chest wall. It contains four muscles that exert a force on the upper limb')
INTO MuscleGroup VALUES('Legs','Muscles on the lower leg')
Select * from dual;


INSERT ALL
INTO Exercise VALUES('Push ups',0.3,'Chest','Exercise mat')
INTO Exercise VALUES('Sit ups',0.2,'Abs','Exercise mat')
INTO Exercise VALUES('Biceps Curl',0.4,'Biceps','Dumbbell')
INTO Exercise VALUES('Kettlebell Swing',0.1,'Triceps','Kettlebell')
INTO Exercise VALUES('Cycling',0.3,'Quadriceps','Spin bike')
INTO Exercise VALUES('Running',0.6,'Quadriceps','Treadmill')
INTO Exercise VALUES('Climbing',0.4,'Legs','Stair mill')
SELECT * from dual;


INSERT ALL
INTO Nutrition VALUES('Eggs',0.1,5,7,12,10)
INTO Nutrition VALUES('Meat',0.4,3.5,27,9,15)
INTO Nutrition VALUES('Milk',0.2,3,8,5,3)
INTO Nutrition VALUES('Cheese',0.3,6,8,5,3)
INTO Nutrition VALUES('Essential Proteins',0.7,0.4,10,4,13)
SELECT * FROM Dual;

INSERT ALL
INTO FitnessGoal VALUES ('Weight Loss','Losing fat on the body, maintaing a healty muslce to fat ratio')
INTO FitnessGoal VALUES ('Weight Gain','Gaining mass on the body, maintaing a healty muslce to fat ratio')
INTO FitnessGoal VALUES ('Muscle Gain','Gaining Muslce on the body, maintaing a healty muslce to fat ratio')
INTO FitnessGoal VALUES ('Cardio','Strengthening stamina')
Select * FROM DUAL;

INSERT ALL
INTO Plan VALUES (1,'Weight Loss')
INTO Plan VALUES (2,'Weight Gain')
SELECT * FROM DUAL;



INSERT All
INTO UserAccount values ('Ali.Shah','12345','Sher Ali',21,1.6,60,60/(1.6*1.6),2,0)
INTO UserAccount values ('shahid','00000','Shahid Afridi',43,1.8,80,80/(1.8*1.8),1,0)
INTO UserAccount values ('Mustafa20','9876','Mustafa Raza',15,1.5,55,55/(1.5*1.5),2,0)
INTO UserAccount values ('Shaheer786','5555','Shaheer Abbas',49,1.7,70,70/(1.7*1.7),1,0)
INTO UserAccount values ('12Waseem','12345','Waseem Shah',39,1.7,70,70/(1.7*1.7),2,0)
INTO UserAccount values ('Yaseen246','24612','Yassen Abbas',50,1.5,90,90/(1.5*1.5),2,0)
select * from dual;

INSERT ALL
INTO DailyTargets values ('Monday',1)
INTO DailyTargets values ('Tuesday',1)
INTO DailyTargets values ('Wednesday',1)
INTO DailyTargets values ('Thrusday',1)
INTO DailyTargets values ('Friday',1)
INTO DailyTargets values ('Saturday',1)
INTO DailyTargets values ('Sunday',1)
INTO DailyTargets values ('Monday',2)
INTO DailyTargets values ('Tuesday',2)
INTO DailyTargets values ('Wednesday',2)
INTO DailyTargets values ('Thrusday',2)
INTO DailyTargets values ('Friday',2)
INTO DailyTargets values ('Saturday',2)
INTO DailyTargets values ('Sunday',2)
SELECT * FROM DUAL;



INSERT ALL
INTO DailyNutrition values ('Eggs','Monday',1,3)
INTO DailyNutrition values ('Meat','Tuesday',1,1)
INTO DailyNutrition values ('Eggs','Wednesday',1,5)
INTO DailyNutrition values ('Milk','Thrusday',1,2)
INTO DailyNutrition values ('Cheese','Friday',1,1)
INTO DailyNutrition values ('Eggs','Saturday',1,4)
INTO DailyNutrition values ('Essential Proteins','Sunday',1,3)
INTO DailyNutrition values ('Eggs','Monday',2,5)
INTO DailyNutrition values ('Meat','Tuesday',2,3)
INTO DailyNutrition values ('Meat','Wednesday',2,3)
INTO DailyNutrition values ('Milk','Thrusday',2,3)
INTO DailyNutrition values ('Essential Proteins','Friday',2,3)
INTO DailyNutrition values ('Cheese','Saturday',2,3)
INTO DailyNutrition values ('Essential Proteins','Sunday',2,3)
SELECT * FROM DUAL;



INSERT ALL
INTO DailyExercise values ('Monday',1,'Push ups',5,15)
INTO DailyExercise values ('Tuesday',1,'Sit ups',3,20)
INTO DailyExercise values ('Wednesday',1,'Push ups',5,20)
INTO DailyExercise values ('Thrusday',1,'Kettlebell Swing',4,20)
INTO DailyExercise values ('Friday',1,'Running',2,10)
INTO DailyExercise values ('Saturday',1,'Biceps Curl',6,15)
INTO DailyExercise values ('Sunday',1,'Climbing',7,15)
INTO DailyExercise values ('Monday',2,'Sit ups',4,20)
INTO DailyExercise values ('Tuesday',2,'Sit ups',5,17)
INTO DailyExercise values ('Wednesday',2,'Push ups',6,20)
INTO DailyExercise values ('Thrusday',2,'Biceps Curl',5,15)
INTO DailyExercise values ('Friday',2,'Running',3,15)
INTO DailyExercise values ('Saturday',2,'Kettlebell Swing',7,10)
INTO DailyExercise values ('Sunday',2,'Push ups',8,10)
SELECT * FROM DUAL;


 create or replace procedure rewardsum(user IN varchar, totalreward OUT number)
is

begin
select sum(rewardgained) into totalreward from log where username = user;

end;
/

create or replace procedure updateReward(user IN varchar)
is

rew number;
begin
rewardsum(user, rew);
update useraccount set TotalReward = rew where username = user;

end;
/



commit;


