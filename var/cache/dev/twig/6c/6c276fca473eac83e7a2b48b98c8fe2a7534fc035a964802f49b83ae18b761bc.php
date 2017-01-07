<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f68d2144505145fdca2aa157cc548d97f9a56e12681b0dd508e7f499525a1a04 extends Twig_Template
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
        $__internal_35b60a7ad633c5db298dc625434f64c5c94bb36dc108a8f669242ffbac1bfe3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b60a7ad633c5db298dc625434f64c5c94bb36dc108a8f669242ffbac1bfe3d->enter($__internal_35b60a7ad633c5db298dc625434f64c5c94bb36dc108a8f669242ffbac1bfe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_19b08eee14f6a5a3825a56672975a561e0266424284c79cbe1879376acdfd2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b08eee14f6a5a3825a56672975a561e0266424284c79cbe1879376acdfd2df->enter($__internal_19b08eee14f6a5a3825a56672975a561e0266424284c79cbe1879376acdfd2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_35b60a7ad633c5db298dc625434f64c5c94bb36dc108a8f669242ffbac1bfe3d->leave($__internal_35b60a7ad633c5db298dc625434f64c5c94bb36dc108a8f669242ffbac1bfe3d_prof);

        
        $__internal_19b08eee14f6a5a3825a56672975a561e0266424284c79cbe1879376acdfd2df->leave($__internal_19b08eee14f6a5a3825a56672975a561e0266424284c79cbe1879376acdfd2df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
