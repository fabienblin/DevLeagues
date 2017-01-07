<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9b3f9060cf6b15d2df7931794565ae7d29af5820d93f7f2e98364844a87d12ab extends Twig_Template
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
        $__internal_33b0ec177e4f1b71ae2941be850a31809519dfb6e72ab837790f85bf9a9e09d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b0ec177e4f1b71ae2941be850a31809519dfb6e72ab837790f85bf9a9e09d7->enter($__internal_33b0ec177e4f1b71ae2941be850a31809519dfb6e72ab837790f85bf9a9e09d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e63e3afef04a9063eeebc6015f8b536f623acd2caad3f87469132ac8c5e37bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63e3afef04a9063eeebc6015f8b536f623acd2caad3f87469132ac8c5e37bc7->enter($__internal_e63e3afef04a9063eeebc6015f8b536f623acd2caad3f87469132ac8c5e37bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_33b0ec177e4f1b71ae2941be850a31809519dfb6e72ab837790f85bf9a9e09d7->leave($__internal_33b0ec177e4f1b71ae2941be850a31809519dfb6e72ab837790f85bf9a9e09d7_prof);

        
        $__internal_e63e3afef04a9063eeebc6015f8b536f623acd2caad3f87469132ac8c5e37bc7->leave($__internal_e63e3afef04a9063eeebc6015f8b536f623acd2caad3f87469132ac8c5e37bc7_prof);

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
", "@Framework/Form/form_rows.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
