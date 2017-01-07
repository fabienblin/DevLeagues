<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ec83ca51e9186e47016032df5d089932895021ed5b0c0285c4c7ef843e2dd573 extends Twig_Template
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
        $__internal_f358d19b8a487f66724ffde2d5fb9a4155b7cbc18af2060c9add2961bf04d0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f358d19b8a487f66724ffde2d5fb9a4155b7cbc18af2060c9add2961bf04d0ff->enter($__internal_f358d19b8a487f66724ffde2d5fb9a4155b7cbc18af2060c9add2961bf04d0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_75248444e2e98569febf9202e3c1fbaf95e420baa0a43975b5fb3a958c02dc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75248444e2e98569febf9202e3c1fbaf95e420baa0a43975b5fb3a958c02dc9a->enter($__internal_75248444e2e98569febf9202e3c1fbaf95e420baa0a43975b5fb3a958c02dc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f358d19b8a487f66724ffde2d5fb9a4155b7cbc18af2060c9add2961bf04d0ff->leave($__internal_f358d19b8a487f66724ffde2d5fb9a4155b7cbc18af2060c9add2961bf04d0ff_prof);

        
        $__internal_75248444e2e98569febf9202e3c1fbaf95e420baa0a43975b5fb3a958c02dc9a->leave($__internal_75248444e2e98569febf9202e3c1fbaf95e420baa0a43975b5fb3a958c02dc9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
