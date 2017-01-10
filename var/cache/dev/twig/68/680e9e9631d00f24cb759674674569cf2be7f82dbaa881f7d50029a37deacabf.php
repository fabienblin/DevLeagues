<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e5f1132852e4167e7db046fe5032ed4dd7d4656ff81ace906bf5258250a9c0e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_030e7729586f189599dae8053cb31316cf68ccf3ce5f91c1375240560e72b857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030e7729586f189599dae8053cb31316cf68ccf3ce5f91c1375240560e72b857->enter($__internal_030e7729586f189599dae8053cb31316cf68ccf3ce5f91c1375240560e72b857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4a8910e1ca6767aa1bbe8b1f4c8110f64f6d956cd60acb82e9f7882fc50cd0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8910e1ca6767aa1bbe8b1f4c8110f64f6d956cd60acb82e9f7882fc50cd0f5->enter($__internal_4a8910e1ca6767aa1bbe8b1f4c8110f64f6d956cd60acb82e9f7882fc50cd0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_030e7729586f189599dae8053cb31316cf68ccf3ce5f91c1375240560e72b857->leave($__internal_030e7729586f189599dae8053cb31316cf68ccf3ce5f91c1375240560e72b857_prof);

        
        $__internal_4a8910e1ca6767aa1bbe8b1f4c8110f64f6d956cd60acb82e9f7882fc50cd0f5->leave($__internal_4a8910e1ca6767aa1bbe8b1f4c8110f64f6d956cd60acb82e9f7882fc50cd0f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
