/*
Sample Java code provided by Samson Tu <tu@smi.stanford.edu>
This code shows how to invoke PAL querying engine and PAL
constraint-checking engine programmatically.


- In main function, adapt this declaration to your environment:
String kbURL =
"C:\Program Files\Protege-2000\examples\newspaper_extended\newspaper-pal.pprj";
- Be sure to have the pal_query Protege project in the same directory.
This project can be found under Protege-2000\projects\pal_query\


- To compile this file, adapt this command line to your environment:
javac -d ./Classes -classpath "C:\Program Files\Protege-2000\protege.jar;C:\Program Files\Protege-2000\plugins\pal.jar;.\Classes" testPAL.java
- To run, adapt this command line to your environment:
java -classpath "C:\Program Files\Protege-2000\protege.jar;C:\Program Files\Protege-2000\plugins\pal.jar;C:\Program Files\Protege-2000\plugins\antlr.jar;.\Classes" testPAL.testPAL
*/


import java.util.*;
import java.io.*;
import edu.stanford.smi.protege.model.*;
import edu.stanford.smi.protege.*;
import edu.stanford.smi.protege.util.*;
import edu.stanford.smi.protegex.pal.engine.*;
import edu.stanford.smi.protegex.pal.parser.*;
import edu.stanford.smi.protegex.pal.relations.*;
import edu.stanford.smi.protegex.pal.*;



public class testPAL {


  public testPAL() {
  }


  public static Collection doQuery(Instance PALQuery, KnowledgeBase kb)
    throws  Exception {


    if (PALQuery== null) {
      throw new Exception("PAL_Query.doQuery: No PAL query");
    } else {
      EvaluationPolicy evalPolicy = new EvaluationPolicy();
      QueryEngine evalEngine = new QueryEvaluationEngine(evalPolicy,
        kb);
      QueryEngineResponse response = evalEngine.askSingleQuery(
        PALQuery);
      Collection queryResult = null;
      Collection realResults = new ArrayList();
      if (response.queryHasAtLeastOneAnswer(PALQuery)) {
        queryResult = response.getQueryAnswers();
        for (Iterator i=queryResult.iterator(); i.hasNext();) {
          QueryAnswer result = (QueryAnswer)i.next();
          // Only one variable has bindings, but have Collection nevertheless
          Collection allVariableBindings = result.getAllVariableValueBindings();
          for (Iterator k=allVariableBindings.iterator(); k.hasNext();)
          {
            VariableValueBinding binding = (VariableValueBinding)k.next();
            Instance queryResultInstance = (Instance)binding.getVariableValue();
            realResults.add(queryResultInstance);
          }
        }


      } else System.out.println("No query result for "+PALQuery.getName());
      if (realResults.isEmpty()) {
        return null;
      } else return realResults;


    }
  }


  public static Collection evaluatePALConstraint(Instance PALConstraint, KnowledgeBase kb)
    throws  Exception {
   // returns a collection of ConstraintViolation instances or null
    if (PALConstraint== null) {
      throw new Exception("evaluatePALConstraint: No PAL constraint");
    } else {
      EvaluationPolicy evalPolicy = new EvaluationPolicy();
      evalPolicy.setFindAllCounterExamples(true);
      ConstraintEvaluationEngine evalEngine = new ConstraintEvaluationEngine(evalPolicy,
        kb);
      ConstraintEngineResponse response = evalEngine.checkSingleStatement(
        PALConstraint);
      Collection constraintResult = null;
      if (response.areThereConstraintViolations()) {
          constraintResult = response.getConstraintViolations(PALConstraint);
          System.out.println("Number of violations of "+PALConstraint.getName()+"= "+
                             constraintResult.size());
      } else System.out.println("No constraint violations for "+PALConstraint.getName());
      return constraintResult;


    }
  }




  public static boolean checkConstraint(Instance PALConstraint, KnowledgeBase kb)
        throws Exception {
      // returns true if constraint is satisfied, false otherwise


    if (PALConstraint== null) {
      throw new Exception("checkConstraint: No PAL constraint");
    } else {
            EvaluationPolicy evalPolicy = new EvaluationPolicy();  //**PAL API call**
            ConstraintEvaluationEngine evalEngine =
                      new ConstraintEvaluationEngine(evalPolicy, kb);    //**PAL API call**
            ConstraintEngineResponse response = null;    //**PAL declaration**
            response = evalEngine.checkSingleStatement(
              PALConstraint);               //**PAL API call**
            if (response.areThereConstraintViolations()) {
            // there is constraint violation
              System.out.println("checkConstraint: "+PALConstraint.getName()+" is violated");
              return false;
      } else {
              System.out.println("checkConstraint: "+PALConstraint.getName()+" is satisfied");
              return true;
      }
    }


  }


  public static void displayConstraintViolation (ConstraintViolation c) {


    Collection variableValueBindings = c.getAllVariableValueBindings();
    for (Iterator i=variableValueBindings.iterator(); i.hasNext();) {
      VariableValueBinding binding = (VariableValueBinding)i.next();
      String variableName = binding.getVariableName();
      Instance violationInstance = (Instance) binding.getVariableValue();
      System.out.println("Variable: "+variableName + " violating instance: "+
                         violationInstance.getBrowserText());
    }
  }


  public static void main(String[] args) {
    testPAL vTestPAL = new testPAL();
    KnowledgeBase kb = null;
    String kbURL ="D:/projects/protege/pal/src/newspaper-pal.pprj";




    Project project;
    Collection error_messages  = new ArrayList();


    try  {
      project = Project.loadProjectFromFile(kbURL, error_messages);
      kb = project.getKnowledgeBase();
    } catch (Throwable e) {
      System.out.println("Error loading project: " + kbURL);
      e.printStackTrace();
      System.exit(1);


    }
    try {
      Cls palQueryCls = kb.getCls("PAL-QUERY");


      // First print out employees' salaries
      Cls employeeCls = kb.getCls("Employee");
      float salary = 0;
      Collection employees = employeeCls.getInstances();
      for (Iterator k=employees.iterator(); k.hasNext();) {
        salary = 0;
        Instance employee = (Instance)k.next();
        Object salaryObj = employee.getOwnSlotValue(kb.getSlot("salary"));
        if (salaryObj != null) salary = ((Float)salaryObj).floatValue();


            System.out.println(employee.getOwnSlotValue(kb.getSlot("name"))+"   "
               +salary);
      }


      // Do all queries
      if (palQueryCls == null) {
        System.out.println("No pal query class!");
      } else {
        Collection queries = palQueryCls.getInstances();
        if (queries != null) {
          for (Iterator j=queries.iterator();j.hasNext(); ) {
            Instance query = (Instance)j.next();
            System.out.println("Make query "+query.getName());
            Collection answers = doQuery(query, kb);
            if (answers != null) {
              System.out.println(query.getName() + " has results: ");
              for (Iterator i=answers.iterator(); i.hasNext() ; ) {
                System.out.println("Instance "+((Instance)i.next()).getName());
              }
            } else System.out.println("No query result for " + query.getName());
          }
        } else System.out.println("No PAL query");
      }
    } catch (Exception e) {
      System.out.println(e.getMessage());
      e.printStackTrace();
    }
    try {
      Collection constraints = kb.getCls(":PAL-CONSTRAINT").getInstances();
      for (Iterator j=constraints.iterator();j.hasNext();) {
        Instance constraint = (Instance)j.next();
        System.out.println("Checking constraint "+constraint.getName());
        checkConstraint( constraint, kb);
        Collection violations = evaluatePALConstraint(constraint, kb);
        if (violations != null) {
          for (Iterator i=violations.iterator(); i.hasNext();) {
            displayConstraintViolation((ConstraintViolation) i.next());
          }
        }
      }
    } catch (Exception e) {
      System.out.println(e.getMessage());
      e.printStackTrace();
    }
    System.out.println("Finished");


  }
}