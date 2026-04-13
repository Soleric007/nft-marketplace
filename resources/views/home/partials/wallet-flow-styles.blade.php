<style>
    .wallet-flow-page {
        background:
            radial-gradient(circle at top left, rgba(124, 92, 255, 0.12), transparent 34%),
            radial-gradient(circle at top right, rgba(93, 99, 255, 0.1), transparent 28%),
            linear-gradient(180deg, #f8f7ff 0%, #ffffff 42%, #f7f8ff 100%);
        padding: 56px 0 104px;
    }

    .wallet-flow-shell {
        width: min(1180px, calc(100% - 32px));
        margin: 0 auto;
    }

    .wallet-flow-hero,
    .wallet-flow-card,
    .wallet-flow-provider-card,
    .wallet-flow-summary-card {
        background: #fff;
        border: 1px solid rgba(86, 88, 185, 0.14);
        border-radius: 28px;
        box-shadow: 0 24px 70px rgba(33, 36, 86, 0.08);
    }

    .wallet-flow-hero {
        padding: 40px;
        margin-bottom: 28px;
    }

    .wallet-flow-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(86, 88, 185, 0.1);
        color: #5658b9;
        font-size: 0.82rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        text-transform: uppercase;
    }

    .wallet-flow-title {
        margin: 18px 0 12px;
        color: #171a39;
        font-size: clamp(2rem, 3vw, 3.35rem);
        font-weight: 800;
        line-height: 1.04;
    }

    .wallet-flow-text {
        max-width: 760px;
        margin: 0;
        color: #5f6780;
        font-size: 1.05rem;
        line-height: 1.75;
    }

    .wallet-flow-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 22px;
    }

    .wallet-flow-button,
    .wallet-flow-button-secondary,
    .wallet-flow-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        border-radius: 16px;
        font-weight: 700;
        text-decoration: none !important;
        transition: transform 0.18s ease, box-shadow 0.18s ease, background 0.18s ease, color 0.18s ease;
    }

    .wallet-flow-button {
        min-height: 54px;
        padding: 0 22px;
        border: 0;
        background: linear-gradient(135deg, #5f61f2 0%, #6e48ff 100%);
        color: #fff;
        box-shadow: 0 16px 30px rgba(95, 97, 242, 0.24);
    }

    .wallet-flow-button:hover,
    .wallet-flow-button-secondary:hover,
    .wallet-flow-link:hover,
    .wallet-flow-provider-card:hover {
        transform: translateY(-2px);
    }

    .wallet-flow-button-secondary {
        min-height: 54px;
        padding: 0 22px;
        border: 1px solid rgba(86, 88, 185, 0.18);
        background: rgba(86, 88, 185, 0.07);
        color: #40469b;
    }

    .wallet-flow-link {
        color: #4b50df;
    }

    .wallet-flow-grid,
    .wallet-flow-provider-grid,
    .wallet-flow-summary-grid,
    .wallet-flow-step-grid {
        display: grid;
        gap: 22px;
    }

    .wallet-flow-card {
        padding: 30px;
    }

    .wallet-flow-card-title {
        margin: 0 0 22px;
        color: #171a39;
        font-size: 1.75rem;
        font-weight: 800;
        line-height: 1.15;
    }

    .wallet-flow-label {
        display: block;
        margin-bottom: 10px;
        color: #3f475f;
        font-size: 0.98rem;
        font-weight: 700;
    }

    .wallet-flow-field,
    .wallet-flow-select {
        width: 100%;
        min-height: 58px;
        padding: 16px 18px;
        border: 1px solid rgba(67, 74, 97, 0.14);
        border-radius: 18px;
        background: #fff;
        color: #171a39;
        font-size: 1rem;
        transition: border-color 0.18s ease, box-shadow 0.18s ease;
    }

    .wallet-flow-field:focus,
    .wallet-flow-select:focus {
        outline: none;
        border-color: rgba(86, 88, 185, 0.45);
        box-shadow: 0 0 0 4px rgba(86, 88, 185, 0.12);
    }

    .wallet-flow-field[readonly] {
        background: #f8f8ff;
        color: #3b4190;
    }

    .wallet-flow-error {
        margin-top: 8px;
        color: #dc2626;
        font-size: 0.92rem;
        font-weight: 600;
    }

    .wallet-flow-stat-list {
        display: grid;
        gap: 16px;
    }

    .wallet-flow-stat {
        padding: 18px 20px;
        border-radius: 20px;
        background: #f8f9ff;
        border: 1px solid rgba(67, 74, 97, 0.08);
    }

    .wallet-flow-stat.success {
        background: #f0fdf4;
        border-color: rgba(34, 197, 94, 0.2);
    }

    .wallet-flow-stat.warning {
        background: #fffbeb;
        border-color: rgba(245, 158, 11, 0.22);
    }

    .wallet-flow-stat-title {
        display: block;
        margin-bottom: 8px;
        color: #374151;
        font-size: 0.94rem;
        font-weight: 700;
    }

    .wallet-flow-stat-value {
        margin: 0;
        color: #171a39;
        font-size: 1.02rem;
        line-height: 1.7;
        word-break: break-word;
    }

    .wallet-flow-note {
        padding: 18px 20px;
        border-radius: 20px;
        border: 1px solid transparent;
        line-height: 1.7;
    }

    .wallet-flow-note strong {
        display: block;
        margin-bottom: 4px;
        font-size: 1rem;
    }

    .wallet-flow-note.danger {
        background: #fef2f2;
        border-color: rgba(239, 68, 68, 0.18);
        color: #b91c1c;
    }

    .wallet-flow-note.warning {
        background: #fffbeb;
        border-color: rgba(245, 158, 11, 0.24);
        color: #92400e;
    }

    .wallet-flow-note.info {
        background: #eef2ff;
        border-color: rgba(86, 88, 185, 0.18);
        color: #3f46b5;
    }

    .wallet-flow-divider {
        height: 1px;
        margin: 24px 0;
        background: rgba(67, 74, 97, 0.12);
    }

    .wallet-flow-provider-grid {
        grid-template-columns: repeat(1, minmax(0, 1fr));
    }

    .wallet-flow-provider-card {
        position: relative;
        display: block;
        padding: 24px;
        min-height: 245px;
        color: inherit;
        text-decoration: none !important;
        overflow: hidden;
    }

    .wallet-flow-provider-card.active {
        border-color: rgba(86, 88, 185, 0.34);
        box-shadow: 0 30px 80px rgba(86, 88, 185, 0.14);
    }

    .wallet-flow-provider-card img {
        width: 68px;
        height: 68px;
        object-fit: contain;
        margin-bottom: 20px;
    }

    .wallet-flow-provider-title {
        margin: 0 0 10px;
        color: #171a39;
        font-size: 1.55rem;
        font-weight: 800;
    }

    .wallet-flow-provider-text {
        margin: 0;
        color: #697187;
        font-size: 1rem;
        line-height: 1.75;
    }

    .wallet-flow-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        padding: 8px 12px;
        border-radius: 999px;
        background: rgba(86, 88, 185, 0.1);
        color: #4b50df;
        font-size: 0.82rem;
        font-weight: 700;
    }

    .wallet-flow-summary-card {
        padding: 22px 24px;
    }

    .wallet-flow-summary-label {
        display: block;
        margin-bottom: 10px;
        color: #6b7280;
        font-size: 0.88rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .wallet-flow-summary-value {
        margin: 0;
        color: #171a39;
        font-size: 1.08rem;
        font-weight: 700;
        line-height: 1.65;
        word-break: break-word;
    }

    .wallet-flow-balance {
        color: #4b50df;
        font-size: 2rem;
        font-weight: 800;
        line-height: 1.1;
    }

    .wallet-flow-step-grid {
        grid-template-columns: repeat(1, minmax(0, 1fr));
        margin-bottom: 24px;
    }

    .wallet-flow-step-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        margin-bottom: 18px;
        border-radius: 14px;
        background: rgba(86, 88, 185, 0.12);
        color: #4b50df;
        font-weight: 800;
    }

    .wallet-flow-step-title {
        margin: 0 0 10px;
        color: #171a39;
        font-size: 1.35rem;
        font-weight: 800;
    }

    .wallet-flow-step-text {
        margin: 0;
        color: #697187;
        line-height: 1.75;
    }

    .wallet-flow-qr {
        width: 148px;
        height: 148px;
        border-radius: 24px;
        border: 1px solid rgba(86, 88, 185, 0.14);
        background: #fff;
        box-shadow: 0 22px 50px rgba(33, 36, 86, 0.08);
        object-fit: cover;
        padding: 10px;
    }

    .wallet-flow-center {
        text-align: center;
    }

    @media (min-width: 992px) {
        .wallet-flow-grid.two-col {
            grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);
        }

        .wallet-flow-provider-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .wallet-flow-summary-grid,
        .wallet-flow-step-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }

    @media (max-width: 767.98px) {
        .wallet-flow-page {
            padding: 32px 0 72px;
        }

        .wallet-flow-shell {
            width: min(100% - 20px, 1180px);
        }

        .wallet-flow-hero,
        .wallet-flow-card,
        .wallet-flow-provider-card,
        .wallet-flow-summary-card {
            border-radius: 22px;
        }

        .wallet-flow-hero,
        .wallet-flow-card {
            padding: 24px 20px;
        }

        .wallet-flow-provider-card {
            min-height: auto;
        }

        .wallet-flow-title {
            font-size: 2rem;
        }
    }
</style>
