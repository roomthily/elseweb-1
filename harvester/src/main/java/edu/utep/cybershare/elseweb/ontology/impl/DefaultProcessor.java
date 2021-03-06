package edu.utep.cybershare.elseweb.ontology.impl;

import edu.utep.cybershare.elseweb.ontology.*;

import java.util.Collection;

import org.protege.owl.codegeneration.WrappedIndividual;
import org.protege.owl.codegeneration.impl.WrappedIndividualImpl;
import org.semanticweb.owlapi.model.IRI;
import org.semanticweb.owlapi.model.OWLOntology;


/**
 * Generated by Protege (http://protege.stanford.edu).<br>
 * Source Class: DefaultProcessor <br>
 * @version generated on Thu Feb 13 13:45:51 GMT-07:00 2014 by nick
 */
public class DefaultProcessor extends WrappedIndividualImpl implements Processor {

    public DefaultProcessor(OWLOntology ontology, IRI iri) {
        super(ontology, iri);
    }





    /* ***************************************************
     * Data Property http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-edac.owl#hasProcessorName
     */
     
    public Collection<? extends Object> getHasProcessorName() {
		return getDelegate().getPropertyValues(getOwlIndividual(), Vocabulary.DATA_PROPERTY_HASPROCESSORNAME, Object.class);
    }

    public boolean hasHasProcessorName() {
		return !getHasProcessorName().isEmpty();
    }

    public void addHasProcessorName(Object newHasProcessorName) {
	    getDelegate().addPropertyValue(getOwlIndividual(), Vocabulary.DATA_PROPERTY_HASPROCESSORNAME, newHasProcessorName);
    }

    public void removeHasProcessorName(Object oldHasProcessorName) {
		getDelegate().removePropertyValue(getOwlIndividual(), Vocabulary.DATA_PROPERTY_HASPROCESSORNAME, oldHasProcessorName);
    }


}
