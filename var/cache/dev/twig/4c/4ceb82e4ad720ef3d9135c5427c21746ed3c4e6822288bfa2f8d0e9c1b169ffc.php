<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b3f12d5e1d97ba275b0f252c45dcc606fe43fd805675302aa5523d7eeb9edf50 extends Twig_Template
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
        $__internal_e953c148afdc5ef0ab456446c03d5145f5b5468d01324660dcb6571980f0214e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e953c148afdc5ef0ab456446c03d5145f5b5468d01324660dcb6571980f0214e->enter($__internal_e953c148afdc5ef0ab456446c03d5145f5b5468d01324660dcb6571980f0214e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0b5ab1f41957ef2662ab2ecf537d44ea61b97a20b2b9f18c20fd2cd8b747a445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5ab1f41957ef2662ab2ecf537d44ea61b97a20b2b9f18c20fd2cd8b747a445->enter($__internal_0b5ab1f41957ef2662ab2ecf537d44ea61b97a20b2b9f18c20fd2cd8b747a445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e953c148afdc5ef0ab456446c03d5145f5b5468d01324660dcb6571980f0214e->leave($__internal_e953c148afdc5ef0ab456446c03d5145f5b5468d01324660dcb6571980f0214e_prof);

        
        $__internal_0b5ab1f41957ef2662ab2ecf537d44ea61b97a20b2b9f18c20fd2cd8b747a445->leave($__internal_0b5ab1f41957ef2662ab2ecf537d44ea61b97a20b2b9f18c20fd2cd8b747a445_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
