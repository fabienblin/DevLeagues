<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_73af575a6a975bc14a5ee19a9ee26bc3d435914b7186761fad9d14bb8ed4715a extends Twig_Template
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
        $__internal_da532ef1bb9d2dd4e9137603f29cbdabf20b7f47bb0accab7f47fcc9fcba3291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da532ef1bb9d2dd4e9137603f29cbdabf20b7f47bb0accab7f47fcc9fcba3291->enter($__internal_da532ef1bb9d2dd4e9137603f29cbdabf20b7f47bb0accab7f47fcc9fcba3291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a8991bfa6763d0bfde655f7a8198a1c5af1413432620df44247f5f6556c1ca0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8991bfa6763d0bfde655f7a8198a1c5af1413432620df44247f5f6556c1ca0a->enter($__internal_a8991bfa6763d0bfde655f7a8198a1c5af1413432620df44247f5f6556c1ca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_da532ef1bb9d2dd4e9137603f29cbdabf20b7f47bb0accab7f47fcc9fcba3291->leave($__internal_da532ef1bb9d2dd4e9137603f29cbdabf20b7f47bb0accab7f47fcc9fcba3291_prof);

        
        $__internal_a8991bfa6763d0bfde655f7a8198a1c5af1413432620df44247f5f6556c1ca0a->leave($__internal_a8991bfa6763d0bfde655f7a8198a1c5af1413432620df44247f5f6556c1ca0a_prof);

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
", "@Framework/Form/form_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
