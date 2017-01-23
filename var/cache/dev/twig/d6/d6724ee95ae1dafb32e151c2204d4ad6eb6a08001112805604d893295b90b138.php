<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_a99c58852aeef516012e8f3f72dc8b07785745a6eee7eec7777d1a14254ff242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_447f678e8e4703cf905a304c7c2bf435d841103022db63ec883c3a82d5161393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447f678e8e4703cf905a304c7c2bf435d841103022db63ec883c3a82d5161393->enter($__internal_447f678e8e4703cf905a304c7c2bf435d841103022db63ec883c3a82d5161393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $__internal_39a7a050b38e97ac6a0ecc7a4287c7066292c488323e0e0e42010869888b439a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a7a050b38e97ac6a0ecc7a4287c7066292c488323e0e0e42010869888b439a->enter($__internal_39a7a050b38e97ac6a0ecc7a4287c7066292c488323e0e0e42010869888b439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_447f678e8e4703cf905a304c7c2bf435d841103022db63ec883c3a82d5161393->leave($__internal_447f678e8e4703cf905a304c7c2bf435d841103022db63ec883c3a82d5161393_prof);

        
        $__internal_39a7a050b38e97ac6a0ecc7a4287c7066292c488323e0e0e42010869888b439a->leave($__internal_39a7a050b38e97ac6a0ecc7a4287c7066292c488323e0e0e42010869888b439a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fa0544cf96093e34d2ba8a30a6434e8fa94cb18faa540e620a85945902f8e4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0544cf96093e34d2ba8a30a6434e8fa94cb18faa540e620a85945902f8e4e1->enter($__internal_fa0544cf96093e34d2ba8a30a6434e8fa94cb18faa540e620a85945902f8e4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b739768043566ecbface3c711382d7aba77bc41fbbade29b3df464d6cd255390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b739768043566ecbface3c711382d7aba77bc41fbbade29b3df464d6cd255390->enter($__internal_b739768043566ecbface3c711382d7aba77bc41fbbade29b3df464d6cd255390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b739768043566ecbface3c711382d7aba77bc41fbbade29b3df464d6cd255390->leave($__internal_b739768043566ecbface3c711382d7aba77bc41fbbade29b3df464d6cd255390_prof);

        
        $__internal_fa0544cf96093e34d2ba8a30a6434e8fa94cb18faa540e620a85945902f8e4e1->leave($__internal_fa0544cf96093e34d2ba8a30a6434e8fa94cb18faa540e620a85945902f8e4e1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "@SonataAdmin/CRUD/edit_string.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
