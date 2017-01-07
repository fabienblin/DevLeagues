<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_23d63fb46b6b088362db519adc7bb82e8e299fe57d1935f701642027caea4c9c extends Twig_Template
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
        $__internal_481a61404744c33f8fdc8e099ac5ef830669e535c7f8bd369cc95619eb8997e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481a61404744c33f8fdc8e099ac5ef830669e535c7f8bd369cc95619eb8997e7->enter($__internal_481a61404744c33f8fdc8e099ac5ef830669e535c7f8bd369cc95619eb8997e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0b3f7a06173621b6f6e1d14a1068cd18a35369799422deb2c93f3cfe48ea8f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3f7a06173621b6f6e1d14a1068cd18a35369799422deb2c93f3cfe48ea8f98->enter($__internal_0b3f7a06173621b6f6e1d14a1068cd18a35369799422deb2c93f3cfe48ea8f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_481a61404744c33f8fdc8e099ac5ef830669e535c7f8bd369cc95619eb8997e7->leave($__internal_481a61404744c33f8fdc8e099ac5ef830669e535c7f8bd369cc95619eb8997e7_prof);

        
        $__internal_0b3f7a06173621b6f6e1d14a1068cd18a35369799422deb2c93f3cfe48ea8f98->leave($__internal_0b3f7a06173621b6f6e1d14a1068cd18a35369799422deb2c93f3cfe48ea8f98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
