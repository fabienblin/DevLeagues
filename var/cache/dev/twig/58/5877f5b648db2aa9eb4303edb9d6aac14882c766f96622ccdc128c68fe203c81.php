<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bbb76a49628bfdd60c6382965d37ffed9d6b9e4460059a83d04b1af28b85d926 extends Twig_Template
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
        $__internal_06544012e8a4d879502f128cf9280dade6f74266f738eb671f54a3e93b514b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06544012e8a4d879502f128cf9280dade6f74266f738eb671f54a3e93b514b14->enter($__internal_06544012e8a4d879502f128cf9280dade6f74266f738eb671f54a3e93b514b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ff56eaeb62e8c03be18163ae55ea6bb668e5235b453b7376f761563b7c57bf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff56eaeb62e8c03be18163ae55ea6bb668e5235b453b7376f761563b7c57bf36->enter($__internal_ff56eaeb62e8c03be18163ae55ea6bb668e5235b453b7376f761563b7c57bf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_06544012e8a4d879502f128cf9280dade6f74266f738eb671f54a3e93b514b14->leave($__internal_06544012e8a4d879502f128cf9280dade6f74266f738eb671f54a3e93b514b14_prof);

        
        $__internal_ff56eaeb62e8c03be18163ae55ea6bb668e5235b453b7376f761563b7c57bf36->leave($__internal_ff56eaeb62e8c03be18163ae55ea6bb668e5235b453b7376f761563b7c57bf36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
