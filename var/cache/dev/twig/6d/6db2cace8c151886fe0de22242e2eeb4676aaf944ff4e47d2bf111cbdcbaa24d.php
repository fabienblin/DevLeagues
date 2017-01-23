<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_13492dfe648d817c9b0aef7efff28af62d4cb6cc2477b33b91e7f6d5b8eda8ba extends Twig_Template
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
        $__internal_e1b829f3d07a762aba332630848b17a49deeac5b959200b07abc2edde9b9f38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b829f3d07a762aba332630848b17a49deeac5b959200b07abc2edde9b9f38a->enter($__internal_e1b829f3d07a762aba332630848b17a49deeac5b959200b07abc2edde9b9f38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_30076cc5280e417199e56fe2fe243d2e6813dd743bf00f868a2f9e47107b2ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30076cc5280e417199e56fe2fe243d2e6813dd743bf00f868a2f9e47107b2ae5->enter($__internal_30076cc5280e417199e56fe2fe243d2e6813dd743bf00f868a2f9e47107b2ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e1b829f3d07a762aba332630848b17a49deeac5b959200b07abc2edde9b9f38a->leave($__internal_e1b829f3d07a762aba332630848b17a49deeac5b959200b07abc2edde9b9f38a_prof);

        
        $__internal_30076cc5280e417199e56fe2fe243d2e6813dd743bf00f868a2f9e47107b2ae5->leave($__internal_30076cc5280e417199e56fe2fe243d2e6813dd743bf00f868a2f9e47107b2ae5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
